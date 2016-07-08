<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>主要内容区main</title>
<link type="text/css" rel="stylesheet" href="{{ asset('/css/admin/base.css') }}" />
<script src="{{ asset('/js/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
</head>
<body>
@if(count($errors) > 0)
<ul>
    @foreach ($errors->all() as $e)
    <li>{{$e}}</li>
    @endforeach
</ul>
@endif
<form method="post" action="{{url('/Admin/group/'.$group->id)}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <input type="hidden" name="_method" value="PUT" />
    <p>名 称：<input type="text" name="title" value="{{$group->title}}" /></p>
    <p>权 限：
        @foreach($rules as $rule)
            @if(in_array($rule->id, explode(",", $group->rules)))
            <input type="checkbox" name="rules[]" value="{{$rule->id}}" checked />{{$rule->title}}
            @else
            <input type="checkbox" name="rules[]" value="{{$rule->id}}"  />{{$rule->title}}
            @endif
        @endforeach
    </p>
    <p>
        <input type="submit" value="保存" />
    </p>
</form>
</body>
</html>