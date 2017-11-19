<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title无标题文档</title>
</head>
<br />
////////////////////////PCRE风格的正则必须包含定界符'//' preg_match匹配一个符合的单词，preg_match_all匹配所有////////////////////
<body>
<?php
$a='Blue Snow Backlight Backlight and';
$b='/\b\w{4}\b/';       // '//'是一对定界符，\b \b表示匹配一个单词，这个是成对出现的，\w{4}表示任意匹配一个字符数为4的单词
$num=preg_match($b,$a);     //第一个参数为正则表达式，第二个参数为被匹配的字符串 第三个参数为一个数组 可以省略
//注意，preg_match只输出匹配的个数1或0,因为他在匹配成功一个后就停止匹配，如果要输出匹配成功的字符串  可以添加第三个参数 一个数组
echo"<br />";
echo $num;
echo"<br />";
echo"<br />";

$num2=preg_match_all($b,$a,$str1);      //preg_match_all匹配所有符合条件的字符串，并保存在第三个参数 数组里
echo $num2;     //输出匹配成功的个数
echo"<br />";
var_dump($str1);        //输出数组
?>
</body>
</html>
