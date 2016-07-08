<form name="add" method="post" action="/Admin/user/store" class="fl">
	<input type="hidden" name="_token" value="{{csrf_token()}}" />
        <input type="hidden" name="created_at" value="{{date('Y-m-d,H:i:s')}}">
	<p>账 号：<input type="text" name="uname" value="" /></p>
	<p>性 别：<input type="radio" name="sex" value="m" checked />男、女<input type="radio" name="sex" value="w" /></p>
	<p>密 码：<input type="password" name="password" value="" /></p>
	<p>确 认：<input type="password" name="repassword" value="" /></p>
	<p>昵 称：<input type="text" name="nickname" value="" /></p>
        <p>分组：<select name="groupid">
                @foreach($groups as $group)
                    <option value="{{$group->id}}">{{$group->title}}</option>
                @endforeach
                </select>
        </p>
	<input type="submit" value="添 加" />
</form>