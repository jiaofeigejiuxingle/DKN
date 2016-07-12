<a href="{{$_SERVER['HTTP_REFERER']}}">返回上一页</a>
<hr />
@if(count($errors) > 0)
<ul>
    @foreach ($errors->all() as $e)
    <li>{{$e}}</li>
    @endforeach
</ul>
@endif
<form method="post" action="{{url('/Admin/detail')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <p>名 称：<input type="text" name="name" value=""></p>
    <p>商品类cid：<input type="text" name="cid" value="" /></p>
    <p>商品编号gid：<input type="text" name="gid" value="" /></p>
    <p>商品信息描述：<textarea name="thems" width="500" placeholder="请输入商品描述"></textarea></p>
    <p>
        <input type="submit"  value="保存" />
    </p>
</form>