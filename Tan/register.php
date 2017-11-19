
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>greencss.com</title>
</head>
<style>
#back{

	}
	#win{

	}
</style>
<script>
function openLogin(){
   document.getElementById("win").style.display="";
   document.getElementById("back").style.display="";
}
function closeLogin(){
   document.getElementById("win").style.display="none";
   document.getElementById("back").style.display="none";
}
</script>
<body>
<a href="javascript:openLogin();">打开登录框</a>

<div id=back style="	display:none; 
	POSITION:absolute; 
	left:0; top:0; width:100%; height:100%; 
	background-color:#000; 
	opacity:0.5;"></div>
    
<div id='win' style="display:none; POSITION:absolute; left:50%; top:50%; width:600px; height:400px; margin-left:-300px; margin-top:-200px; border:1px solid #888; background-color:#edf; text-align:center">
<form>用户名:<input type=''tedt' name='t1'><br />
密码:<input type='password' name='pwd' ></form>
<br><a href="javascript:closeLogin();">关闭登录框</a></div>
</body>
</html>