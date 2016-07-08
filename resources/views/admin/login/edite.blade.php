<script src="{{ asset('/js/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/uploadify/jquery.uploadify.min.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('/plugins/uploadify/uploadify.css') }}" />
<img src="{{ asset(Session::get("userData")->avartar) }}" width="120" class="fl" id="im" />
<ul>
	<li>昵称：{{ Session::get("userData")->nickname }}</li>
	<li>账号：{{ Session::get("userData")->uname }}</li>
	<li>新建：{{ Session::get("userData")->created_at }}</li>
	<li>更新：{{ Session::get("userData")->updated_at }}</li>
</ul>
<p class="clear"></p>
<form name="upload">
	<input type="hidden" name="_token" value="{{csrf_token()}}" />
	<input type="hidden" name="id" value="{{ Session::get("userData")->id }}" />
	<input type="file" name="avartar" id="avartar" multiple="true" />
</form>
<script src="{{url('/js/admin/user_edit.js')}}"></script>
			
