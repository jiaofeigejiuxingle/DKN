<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>主要内容区main</title>
<link type="text/css" rel="stylesheet" href="{{ asset('/css/admin/base.css') }}" />
<script src="{{ asset('/js/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
</head>
<body>
{{session("info")}}
@if(count($errors) > 0)
<ul>
    @foreach ($errors->all() as $e)
    <li>{{$e}}</li>
    @endforeach
</ul>
@endif
<form method="post" action="{{url('/Admin/rule/'.$rule->id)}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <input type="hidden" name="_method" value="PUT" />
    <p>名 称：<input type="text" name="title" value="{{$rule->title}}" /></p>
    <p>规 则：<input type="text" name="name" value="{{$rule->name}}" /></p>
    <p>状 态：<input type="radio" name="status" value="1"  @if($rule->status == 1) checked @endif />启用、 
            <input type="radio" name="status" value="0"  @if($rule->status == 0) checked @endif />禁用、</p>
    <p>
        <input type="submit" value="保存" />
    </p>
</form>
</body>
</html>