<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
/*  定义服务器的绝对路径  */
define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);
/*  定义Smarty目录的绝对路径  */
define('SMARTY_PATH','\wamp\www\21 code\Smarty\\');
/*  加载Smarty类库文件    */
require BASE_PATH.SMARTY_PATH.'Smarty.class.php';
/*  实例化一个Smarty对象  */
$smarty = new Smarty;
/*  定义各个目录的路径    */
$smarty->template_dir = BASE_PATH.SMARTY_PATH.'moban/';
$smarty->compile_dir = BASE_PATH.SMARTY_PATH.'bai yi/';
$smarty->config_dir = BASE_PATH.SMARTY_PATH.'confings/';
$smarty->cache_dir = BASE_PATH.SMARTY_PATH.'Mo huancun/';

/*  使用Smarty赋值方法将一对儿名称/方法发送到模板中  */
$smarty->assign('title','第一个Smarty程序');
$smarty->assign('content','Hello,Welcome to study \'Smarty\'!');
/*  显示模板  */
$smarty->display('index.html');
?>
</body>
</html>