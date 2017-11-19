<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
body{
	font-color:red;     /*不出意外的话没有用*/
}
</style>
</head>

<body>
<center>
<label>请选择要上传的图片（图片格式为.jpg）：</label>
    <form method="post" action="index.php" enctype="minltipart/form-data">  <!--使用form表单标签-->
    <input type="hidden" name="action" value="upload" />
    <input type="file" name="u_file"/>
    <input type="submit" value="上传"/>
</form>
    <?php
        if($_POST[action]=="upload")        //判断按钮是否为空
        {
            $file_path="./upload\\";        //定义图片在浏览器中的存储位置
            $picture_name=$_FILES[u_file][name];    //获取上传图片的名称
            $picture_name=strstr($picture_name,".");    //使用strstr函数查找指定的字符串
            if($picture_name!=".jpg")       //如果图片的后缀不为.jpg
            {
                echo "<script>alert('上传图片格式不正确，请重新上传');window.location.href='index.php';</script>";
                    //不出意外好像又不能出现
            }
            else if($_FILES[u_file][tmp_name]){
                move_uploaded_file($_FILES[u_file][tmp_name],$file_path.$_FILES[u_file][name]);
                echo"图片上传成功";
            }
            else
			{
            echo "上传图片失败";
			}
        }

    ?>
    </center>
</body>
</html>