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
        <th>编号</th><th>规则</th><th>名称</th><th>是否启用</th><th>操作</th>
    </tr>
    @foreach($rules as $rule)
    <tr>
        <td>{{$rule->id}}</td>
        <td>{{$rule->name}}</td>
        <td>{{$rule->title}}</td>
        <td>
            <input type="radio" name="status/{{$rule->id}}" id="status/{{$rule->id}}/1" value="1" rule="{{$rule->id}}" @if($rule->status == 1) checked @endif ><label for="status/{{$rule->id}}/1">启用</label>
            <input type="radio" name="status/{{$rule->id}}" id="status/{{$rule->id}}/0" value="0" rule="{{$rule->id}}" @if($rule->status == 0) checked @endif ><label for="status/{{$rule->id}}/0">禁用</label>
        </td>
        <td><a href="{{url('/Admin/rule/'.$rule->id."/edit")}}">编辑</a> <a href="/Admin/rule/delete/{{$rule->id}}">删除</a></td>
    </tr>
    @endforeach
</table>
<script src="{{asset('/js/admin/rule_index.js')}}"></script>
</body>
</html>
