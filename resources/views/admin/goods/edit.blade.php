<script src="{{ asset('/js/jquery-2.0.2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/uploadify/jquery.uploadify.min.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('/plugins/uploadify/uploadify.css') }}" />
<a href=""> << 返回上一级</a>
<hr />
<div  class="fl">
<form name="fm"target="_self"method="post" action="/Admin/goods/update">
		<fieldset draggable="draggable">
			<legend>商品基本信息</legend>
			<input type="hidden" name="gid" value="{{$userRec->gid}}" />
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<p>商品名称：<input type="text" name="name" value="{{$userRec->name}}"/></p>
                        <p>所属分类：
                            <select name="cid"  value="{{$userRec->cname}}">
                                <option value="{{$userRec->cname}}">{{$userRec->cname}}</option>
                                <?php
                                $flag = 0;
                                foreach ($categories as $cate)
                                {
                                    if ($cate->pid == 0)
                                    {
                                        $flag++;
                                        echo $flag % 2 == 1 ?  "<optgroup label='{$cate->cname}'>" : "</optgroup><optgroup label='{$cate->cname}'>";
                                    } else 
                                    {
                                        echo "<option value='{$cate->cid}'>{$cate->cname}</option>";
                                    }
                                }
                                echo "</optgroup>";
                                ?>
                            </select>
                        </p>
			<p><input type="submit" value="保存" /></p>
		</fieldset>
	</form>
	<form name="upload">
		<fieldset>
			<legend>缩略图</legend>
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<input type="hidden" name="id" value="{{$userRec->gid}}" />
			<div id="preview"></div><img src="{{url($userRec->im)}}" id="im" width="120" />
			<input type="file" name="goods" id="goods" multiple="true" />
		</fieldset>
	</form>
</div>
<script src="{{url('/js/admin/goods_edit.js')}}"></script>