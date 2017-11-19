<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">
        .Sue {
            font-size: 13px;
            font-weight: bold;
        }
    </style>
<strong>将任意多个文件上传到服务器，这里使用的是move_uploaded_file()函数</strong>
<body>
<tr>
    <td height="20" colspan="2" bgcolor="red" align="center"><strong>文件路径(五个文件以内任意上传)</strong></td>
</tr>
<form action="index_ok.php" method="post" name="form1" enctype="multipart/form-data">
<!--表单中enctype="multipart/form-data"的意思，是设置表单的MIME编码。默认情况，这个编码格式是application/x-www-form-urlencoded
不能用于文件上传；只有使用了multipart/form-data，才能完整的传递文件数据，进行下面的操作. -->
    <tr>
        <td width="90" height="30" align="right" class="Sue"><strong>内容1</strong></td>
        <td width="370"><input type="file" name="picture[]" size="30"></td>
    </tr>
    <br />
    <tr>
        <td width="90" height="30" align="right" class="Sue"><strong>内容2</strong></td>
        <td width="370"><input type="file" name="picture[]" size="30"></td>
    </tr>
    <br />
    <tr>
        <td width="90" height="30" align="right" class="Sue"><strong>内容3</strong></td>
        <td width="370"><input type="file" name="picture[]" size="30"></td>
    </tr>
    <br />
    <tr>
        <td width="90" height="30" align="right" class="Sue"><strong>内容4</strong></td>
        <td width="370"><input type="file" name="picture[]" size="30"></td>
    </tr>
    <br />
    <tr>
        <td width="90" height="30" align="right" class="Sue"><strong>内容5</strong></td>
        <td width="370"><input type="file" name="picture[]" size="30"></td>
    </tr>
    <br />
    <tr>
        <td><input type="image" name="imageField" src="images/02-03 (3).jpg"></td>
        <!--file属性定义输入字段和 "浏览"按钮，供文件上传。-->
    </tr>
</form>
</body>
</html>
