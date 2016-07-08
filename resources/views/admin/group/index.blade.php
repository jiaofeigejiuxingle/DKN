<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>主要内容区main</title>
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin/user_index.css')}}" />
<link type="text/css" rel="stylesheet" href="{{ asset('/css/admin/base.css') }}" />
<script src="{{ asset('/js/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
</head>
<body>
<!--main_top-->
<table class="bordered">
    <tr>
        <th>编号</th><th>名称</th><th>权限</th><th>操作</th>
    </tr>
    @foreach($groups as $row=>$group)
    <tr>
        <td>{{$group->id}}</td>
        <td>{{$group->title}}</td>
        <td>
            @foreach ($rules as $col=>$rule)
            @if ($col % 5 == 0) <p> @endif
                @if(in_array($rule->id, explode(",", $group->rules)))
                <input type="checkbox" name="ruleid[]" value="{{$rule->id}}" group="{{$group->id}}" id="i{{$row.$col}}" checked /><label for="i{{$row.$col}}">{{$rule->title}}</label>
                @else
                <input type="checkbox" name="ruleid[]" value="{{$rule->id}}" group="{{$group->id}}" id="i{{$row.$col}}" /><label for="i{{$row.$col}}">{{$rule->title}}</label>
                @endif
            @if ($col % 5 == 4) </p> @endif
            @endforeach
        </td>
        <td><a href="{{url('/Admin/group/'.$group->id."/edit")}}">编辑</a> <a href="/Admin/group/delete/{{$group->id}}">删除</a></td>
    </tr>
    @endforeach
</table>
<script src="{{asset('/js/admin/group_index.js')}}"></script>
</body>
</html>
