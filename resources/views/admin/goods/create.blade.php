<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>主要内容区main</title>
<link type='text/css' rel='stylesheet' href='/css/admin/user_add.css' />
<script src="{{ asset('/js/jquery-2.0.2.min.js') }}" type="text/javascript"></script>
<script src="/plugins/uploadify/jquery.uploadify.js"></script>
<link type="text/css" rel="stylesheet" href="/plugins/uploadify/uploadify.css"/>
<link type="text/css" rel="stylesheet" href="{{ asset('/css/admin/base.css') }}" />
</head>
<body>
<a href="javascript:history.back();"><< 返回上一页 </a>
<hr />
<form method="post" name="fm" action="/Admin/goods" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <input type="hidden" name="im" value="" />
    <p>商品名称：<input type="text" name="name" value="" /></p>
    <p>所属分类：
        <select name="cid">
            <option value=''>-选择分类-</option>
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
    <p>商品价格：<input type="text" name="price" value=""/></p>
    <p>上传图片：<div id="preview"></div><input type="file" id="im" /></p>
    <input type="submit" value="立即添加" />
</form>
<script src='/js/admin/goods_index.js'></script>
</body>
</html>