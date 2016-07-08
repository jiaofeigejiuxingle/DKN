<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>主要内容区main</title>
<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin/user_index.css')}}" />
<link type="text/css" rel="stylesheet" href="{{ asset('/css/admin/base.css') }}" />
<script src="{{ asset('/js/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script>
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
</script>
</head>
<body>
<!--main_top-->
<table class="borded">
    <tr>
        <td>
            <table>
            <tr>
            <td>
                    <form method="post" action="{{url('/Admin/user')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <span><b>管理员：</b></sapn><input type="text" name="keyword" value="{{$keyword}}" placeholder="请输入账号或昵称" />
                        <input type="submit" value="查找" />
                    </p>
                    </form>
            </td>
            </tr>
            </table>
        </td>
    </tr>
     <tr>
        <td align="left" valign="top">
        {{session("info")}}
    <table class="bordered" border="0">
      <tr>
        <th>编号</th><th>账号</th><th>性别</th><th>昵称</th><th>创建时间</th><th>所属分组</th><th>操作</th>
      </tr>
     @foreach ($users as $tmp)
      <tr>
        <td>{{$tmp->id}}</td>
	<td>{{$tmp->uname}}</td>
	<td>{{$tmp->sex}}</td>
	<td>{{$tmp->nickname}}</td>
	<td>{{$tmp->created_at}}</td>
        <td>
            <select name="groupid" id="{{$tmp->id}}">
                        @foreach ($groups as $group)
                            @if ($tmp->groupid == $group->id)
                                <option value="{{$group->id}}" selected>{{$group->title}}</option>
                            @else
                                <option value="{{$group->id}}">{{$group->title}}</option>
                            @endif
                        @endforeach
             </select>
        </td>
        <td><a href="/Admin/user/edit/{{$tmp->id}}" target="_self" onFocus="this.blur()">编辑</a>
            <span class="gray">&nbsp;&nbsp;</span><a href="/Admin/user/destroy/{{$tmp->id}}" target="_self" onFocus="this.blur()">删除</a><span>&nbsp;&nbsp;</span></td>
      </tr>
    @endforeach 
    </table>
    <p>
	{!!$users->appends(['keyword' => $keyword])->render()!!}
    </p>
    </td>
    </tr>
</table>
<script src="{{asset("/js/admin/user_index.js")}}"></script>
</body>
</html>
