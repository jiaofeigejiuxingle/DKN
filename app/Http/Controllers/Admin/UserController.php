<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB, Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request) {
		//查询所有用户记录
		$users = DB::table("user")
                                ->leftJoin("user_group","user.id", "=", "user_group.id")
				->where("user.uname", 'LIKE','%'.$request->get("keyword").'%')
				->orWhere("user.nickname", "LIKE", "%".$request->get('keyword')."%")
				->orderBy("user.id", "DESC")
				->paginate(8);
		//dd($users);//LengthAwarePaginator
		//获取分页数据和页码值
//		foreach ($users  as $tmp)
//		{
//			var_dump($tmp);
//		}
//		 //查询所有分组信息  用以在列表中显示
                $groups = DB::table("group_rule")->get();
//		dd(get_class_methods($users));
//		echo ($users->render());
                //dd($groups);
                
		return view("admin.user.index", ["users" => $users,"groups" => $groups, 'keyword' => $request->get('keyword')]);
	}
    
    public function add()
    {
          //查询所有的分组信息
        $groups = DB::table("group_rule")->get();
        
        return view("admin.user.add",["groups"=>$groups]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request) {
		//有效性验证
		
		$this->validate($request, [
			"uname" => "required|unique:user",
			"password" => "required|between:6,15",
			"repassword" => "required|same:password",
			"nickname" => "required",
		],[
			"uname.required" => "账号不能为空",
			"uname.unique" => "该账号已被占用",
			"password.required" => "密码未填写",
			"password.between" => "密码长度应为6-15位",
			"repassword.required" => "确认密码未填写",
			"repassword.same" => "两次密码输入不一致",
			"nickname.required" => "昵称未填写",
		]);
		
		//数据入库
		$data = $request->except("_token", "repassword","groupid");
		$data["password"] = Hash::make($data["password"]);
		//设置默认头像
		//$data["avartar"] = "/uploads/avartar/asd.png";
                if(!FALSE !== $id = DB::table("user")->insertGetId($data))//返回提示
		{   
                        DB::table("user_group")->insert(["id" => $id, "groupid"=>$request->get("groupid")]);
			return redirect("/Admin/user");
		} else
		{
			return back()->with(["info" => "注册失败"]);
		}
		
	}
    
    
    
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function edit($id) {
         //查询用户记录
         $userRec = DB::table("user")->leftJoin("user_group", "user.id", "=", "user_group.id")->where("user.id", $id)->select("user.*", "user_group.groupid")->first();
	
        //dd($userRec);
        //查询所有分组
         $groups = DB::table("group_rule")->get();
	//在模板中显示
	return view("admin.user.edit", ["userRec" => $userRec, "groups" => $groups]);
     
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request) {
		//验证数据
		$this->validate($request, [
			"password" => "between:6,15",
			"repassword" => "same:password",
			"nickname" => "required",
		],[
			"password.between" => "密码长度应为6-15位",
			"repassword.same" => "两次密码输入不一致",
			"nickname.required" => "昵称未填写",
		]);
		//保存用户
		$data = $request->except("id", "_token", "repassword","groupid");
		if (!empty($data["password"])) //如果有密码 则进行Hash加密
		{
			$data["password"] = Hash::make($data["password"]);
		} else //否则去除密码字段
		{
			unset($data["password"]);
		}
		if (FALSE !== $result = DB::table("user")->where("id", $request->get("id"))->update($data))
		{
                        //修改用户对应的分组编号
                        DB::table("user_group")->where("id", $request->get("id"))->update(["groupid" => $request->get("groupid")]);
			return redirect("/Admin/user");
		}
	}

        /**
	 * Change the avartar resouce from the loginer
	 * 
	 * @param 
	 */
	public function avartar(Request $request) {
		//转存文件
		$avartar = $request->file("Filedata");
		if (!$avartar->isValid()) {
//			echo json_encode(array("status" => false, "info" => "不合法的上传"));
//			exit;
			return response()->json(array("status" => false, "info" => "不合法的上传"));
		}
		//重命名文件
		$suffix = $avartar->getClientOriginalExtension();
		$rename = date("YmdHis") . rand(1000, 9999) . "." . $suffix;
		//转存
		$result = $avartar->move("./uploads/avartar", $rename);

		//修改数据库
		$userModel = new \App\User();
		$user = $userModel->find($request->get("id"));
		$user->avartar = "/uploads/avartar/" . $rename;
		$user->save();
		//返回结果
		echo json_encode(array("status" => true, "info" => "/uploads/avartar/" . $rename));
	}
        
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        if(DB::table("user")->where("id",$id)->delete())
        {
            return redirect("Admin/user");
        } else 
        {
        return back()->with(["info"=>"删除失败"]);
        }
    }
    
    
    //修改用户对应的分组
        public function setGroup(Request $request)
        {
            dd($request);
            //修改user_group表中 某用户id对应的分组编号groupid
            if (FALSE !== $result = DB::table("user_group")->where("id", $request->get("id"))->update(["groupid" => $request->get("groupid")])) 
                     
            {
                return response()->json(["status" => 1, "info" => "修改成功"]);
               
            } else
            {
                return response()->json(["status" => 0, "info" => "修改失败"]);
            }
        }
}
