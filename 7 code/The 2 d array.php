<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title无标题文档</title>
</head>
/////////////一维数组是里面的元素只有变量，二维数组:一个数组里包含一个数组就称为二维数组//////////////////////////////////////////
/////////////按照同样的思路，一维数组里有一个数组时变为二维数组，一维数组的数组里再有一个数组变为三维数组///////////////////////////
<body>
<?php
echo"<br />";
echo"<br />";
$a=array(
    "书籍"=>array("liter"=>"文学",'1'=>"历史","地理"),  //注意不同于花括号 括号里要用'逗号'隔开，不能用分号
    "体育用品"=>array('f'=>"足球",'b'=>"篮球"), //二维数组里不能套方括号[]直接用引号套起来
    "水果"=>array('4'=>"pineapple","watermelon",'9'=>"hami melon")
);
print_r($a);
?>
</body>
</html>
