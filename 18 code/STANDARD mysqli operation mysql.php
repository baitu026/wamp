<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title鏃犳爣棰樻枃妗?/title>
</head>
<body>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'user');      //娌℃湁瀵嗙爜灏变笉濉紝浣嗚鏈夎繖涓┖
if(mysqli_connect_errno())
{
    echo mysqli_connect_error();        //閿欒鎶涘嚭鎵撳嵃閿欒淇℃伅
}
$sql='insert haha(username)values("basitu")';            //鎻掑叆涓€鏉¤褰?
$sql2='select * from haha';
$res=$mysqli->query($sql2);      //浣跨敤query鎵ц

echo $mysqli->affected_rows."<br />";        //鍙楀奖鍝嶆潯鏁?

echo $res->num_rows;        //琛屾暟

echo "<br />".$res->field_count;        //鍒楁暟

echo "<br />".$mysqli->insert_id;        #鎻掑叆鐨処D
?>
</body>
</html>