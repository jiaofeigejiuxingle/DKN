<a href="{{$_SERVER['HTTP_REFERER']}}">返回上一页</a>
<hr />
@if(count($errors) > 0)
<ul>
    @foreach ($errors->all() as $e)
    <li>{{$e}}</li>
    @endforeach
</ul>
@endif
<form method="post" action="{{url('/Admin/category')."/".$category->cid}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <input type="hidden" name="_method" value="PUT" />
    <p>父 类：{{$pcate or "根类"}}</p>
    <p>名 称：<input type="text" name="cname" value="{{$category->cname}}" /></p>
    <p>导 航：<input type="radio" name="isNav" value="Y" @if($category->isNav == "Y") checked @endif />是
            <input type="radio" name="isNav" value="N"  @if($category->isNav == "N") checked @endif  />否
    </p>
    <p>
        <input type="submit"  value="更新" />
    </p>
</form>
