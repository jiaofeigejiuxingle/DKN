<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,
    Session;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     * 显示资源列表
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查询所有的商品
        $goods = DB::table("goods")->leftJoin("category", "goods.cid", "=", "category.cid")->orderBy("goods.cid")->paginate(10);

        //模板显示
        return view("admin.goods.index", compact("goods"));
    }

    /**
     * Show the form for creating a new resource.
     * 显示一个添加资源的表单
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //查询所有的分类
        $categories = DB::table("category")->orderByRaw("CONCAT_WS(',',path, cid)")->get();
        foreach ($categories as $key=>$cate)
        {
            $categories[$key]->cname = "|".str_repeat("--",substr_count($cate->path, ",")*4).$cate->cname;
        }
//        dd($categories);
        //引入模板
        return view("admin.goods.create", compact("categories"));
    }

    
    //上传文件的方法
    public function im(Request $request)
    {
        //将文件重命名并转存
        $file = $request->file("Filedata");
        //新的文件名
        $rename = date("YmdHis").rand(1000, 9999).".".$file->getClientOriginalExtension();
        //新的文件地址
        if ($file->move("./uploads/goods/", $rename))
        {
            return response()->json(["status" => 1, "info" => "/uploads/goods/".$rename]);
        } else
        {
             return response()->json(["status" => 0, "info" => "上传失败"]);
        }
    }
    /**
     * Store a newly created resource in storage.
     * 存放一个资源
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取数据
        $data = $request->except("_token");
        //验证数据
        
        //返回结果
        if (false !== $insertID = DB::table("goods")->insertGetId($data))
        {
            return redirect("/tips")->with(["info" => "Add Goods Ok! ID : ".$insertID, "url" => "/Admin/goods"]);
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
    public function edit($gid)
    {
        //查询商品的记录
        $userRec = DB::table("goods")->leftJoin("category", "goods.cid", "=", "category.cid")->where("goods.gid", $gid)->select("goods.*","category.cname")->first();
//	dd($userRec);
//        exit;
        //查询所有商品分组
         $goods = DB::table("goods")->get();
         //查询所有的分类
        $categories = DB::table("category")->orderByRaw("CONCAT_WS(',',path, cid)")->get();
        foreach ($categories as $key=>$cate)
        {
            $categories[$key]->cname = "|".str_repeat("--",substr_count($cate->path, ",")*4).$cate->cname;
        }
        //dd($categories);
        
	//在模板中显示
        return view("admin.goods.edit", ["userRec" => $userRec, "goods" => $goods,"categories" => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->only("name","cid","gid");
//        dd($data);
       DB::table("goods")->where("gid", $request->get("gid"))->update($data);
            
//                DB::table("category")->where("gid", $request->get("gid"))->update(["cid" => $request->get("cid")]);
		return redirect("/Admin/goods");
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($gid)
    {
         if(DB::table("goods")->where("gid",$gid)->delete())
        {
            return redirect("Admin/goods");
        } else 
        {
        return back()->with(["info"=>"删除失败"]);
        }
    }
}
