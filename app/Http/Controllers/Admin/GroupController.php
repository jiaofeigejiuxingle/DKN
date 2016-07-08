<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Session;
class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查找所有的分组
        $groups = DB::table("group_rule")->get();
        //查询所有的权限
        $rules = DB::table("rule")->get();
        return view("admin.group.index", ["groups" => $groups, "rules" => $rules]);
    }
    
    
    //设置分组的权限（AJAX）
    public function setRule(Request $request)
    {
        //判断是添加还是删除分组的权限
        $rules = explode(",", DB::table("group_rule")->where("id", $request->get("group"))->pluck("rules"));//[1,2,3,4,5,6]
        if (false !== $key = array_search($request->get("rule"), $rules))
        {
            unset($rules[$key]);
        } else 
        {
            array_push($rules, $request->get("rule"));
        }
        
        //修改分组对应的权限
        if (false !== $affectedRows = DB::table("group_rule")->where("id", $request->get("group"))->update(["rules" => join(',', $rules)]))
        {
            return response()->json(["stauts" => 1, "info" => "修改成功"]);
        } else
        {
            return response()->json(["status" => 0, "info" => "修改失败"]);
        }
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //查询所有的权限
        $rules = DB::table("rule")->get();
        return view("admin.group.create", compact("rules"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //数据验证
        $this->validate($request, [
            "title" => "required",
            "rules" => "required",
        ], [
            "title.required" => "分组名未填写！",
            "rules.required" => "分组权限未选择!"
        ]);
        //添加一个分组
        $data = $request->only("title", "rules");
        $data["rules"] = join(",", $data["rules"]);
        if (false !== $insertID = DB::table("group_rule")->insertGetId($data))
        {
            return redirect("/tips")->with(["info" => "OK!", "url" => "/Admin/group"]);
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
        //获取该分组的信息
        $group = DB::table("group_rule")->where("id", $id)->first();
        
        //查询所有的权限
        $rules = DB::table("rule")->get();
       
        return view("admin.group.edit", ["group" => $group, "rules" => $rules]);
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
        //数据验证
        $this->validate($request, [
            "title" => "required",
            "rules" => "required",
        ], [
            "title.required" => "分组名未填写！",
            "rules.required" => "分组权限未选择!"
        ]);
        //添加一个分组
        $data = $request->only("title", "rules");
        $data["rules"] = join(",", $data["rules"]);
        if (false !== $affectedRow = DB::table("group_rule")->where("id", $id)->update($data))
        {
            return redirect("/tips")->with(["info" => "Affected ".$affectedRow." Line.", "url" => "/Admin/group"]);
        } else
        {
             return redirect("/tips")->with(["info" => "Failed.", "url" => "/Admin/group"]);
        }
        
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
        if (false !== DB::table("group_rule")->where("id", $id)->delete())
        {
            return redirect("/tips")->with(["info" => "OK.", "url" => "/Admin/group"]);
        } else 
        {
             return redirect("/tips")->with(["info" => "Failed.", "url" => "/Admin/group"]);
        }
    }
}
