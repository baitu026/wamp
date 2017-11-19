<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">
    </style>
<strong></strong   
></head>
<body>
<form name="form1" action="" method="post">	<!--这个程序没有实现文件的上传(就算上传也不好使)所以不用添加这个元素:enctype="multipart/form-data"-->
	<input type="file" name="file" size="15"><!--file文件域有一个特有属性accept可以限制上传文件的类型-->
    <input type="submit" name="submit" value="上传">
</form>

<?php
	echo $_POST['file'];	//获取文件的上传路径
?>         
</body>
</html>