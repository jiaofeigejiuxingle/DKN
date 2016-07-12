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
<table class="bordered">
    <tr>
        <th>#</th><th>名称</th><th>父类</th><th>路径</th><th>是否导航</th><th>操作</th>
    </tr>
    @foreach($categories as $key=>$cate)
    <tr>
        <td>{{$cate->cid}}</td>
        <td>{{$cate->cname}}</td>
        <td>
           {{$cate->pid}}
        </td>
        <td>
           {{$cate->path}}
        </td>
        <td>
            <input type="radio" name="isNav_{{$cate->cid}}" value="Y" cid="{{$cate->cid}}" @if($cate->isNav == "Y")checked @endif />是
            <input type="radio" name="isNav_{{$cate->cid}}" value="N" cid="{{$cate->cid}}" @if($cate->isNav == "N")checked @endif />否
        </td>
        <td><a href="{{url('/Admin/category/child')."/".$cate->cid}}">添加子类</a> <a href="{{url('/Admin/category')."/".$cate->cid."/edit"}}">编辑</a> 
            <a href="{{url('/Admin/category/delete')."/".$cate->cid}}">删除</a>
        </td>
    </tr>
    @endforeach
    
</table>
<p>{!!$categories->render()!!}</p>
<script src="{{asset('/js/admin/category_index.js')}}"></script>
