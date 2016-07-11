<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>主要内容区main</title>
<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin/user_index.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin/base.css') }}" />
<script src="{{ asset('/js/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
</head>
<body>
<!--main_top-->
<table class="bordered">
    <tr>
        <th>编号</th><th>商品名称</th><th>所属分类</th><th>缩略图</th><th>操作</th>
    </tr>
   @foreach($goods as $good)
   <tr>
       <td>{{$good->gid}}</td>
       <td>{{$good->name}}</td>
       <td>{{$good->cname}}</td>
       <td><img src="{{$good->im}}" height="50" /></td>
       <td><a href="">编辑</a> <a href="">删除</a></td>
   </tr>
   @endforeach
</table>
{!!$goods->render()!!}
</body>
</html>
