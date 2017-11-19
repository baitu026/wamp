<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['pwd']);
    session_destroy();
    header("location:Index.php"); //header() 函数向客户端发送原始的 HTTP 报头。 在这里是跳转到原界面
?>