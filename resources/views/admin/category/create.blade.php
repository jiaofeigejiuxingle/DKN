<a href="{{$_SERVER['HTTP_REFERER']}}">返回上一页</a>
<hr />
@if(count($errors) > 0)
<ul>
    @foreach ($errors->all() as $e)
    <li>{{$e}}</li>
    @endforeach
</ul>
@endif
<form method="post" action="{{url('/Admin/category')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <input type="hidden" name="pid" value="{{isset($data) ? $data->cid : 0}}" />
    <input type="hidden" name="path" value="{{isset($data) ? $data->path.",".$data->cid : 0}}" />
    <p>父 类：{{isset($data) ? $data->cname : "根类"}}</p>
    <p>名 称：<input type="text" name="cname" value="" /></p>
    <p>导 航：<input type="radio" name="isNav" value="Y" />是
            <input type="radio" name="isNav" value="N" checked />否
    </p>
    <p>
        <input type="submit"  value="保存" />
    </p>
</form>