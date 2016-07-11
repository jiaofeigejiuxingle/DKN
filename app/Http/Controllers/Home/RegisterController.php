<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('home.register.index',);
    }
    
      //生成验证码的方法
    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 80, $height = 24, $font = "C:\Windows\Fonts\msyh.ttf");
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('code', $phrase);
		
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
     
    public function store(Request $request) {
                
		//有效性验证
		//dd(111);
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
		$data = $request->only("uname", "password","code","nickname","avartar");
		$data["password"] = Hash::make($data["password"]);
		//设置默认头像
		$data["avartar"] = "/uploads/avartar/1.png";
		if(FALSE !== $id = DB::table("user")->insertGetId($data))//返回提示
		{   
                        
			return redirect("/Home/login");
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
