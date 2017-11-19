<!doctype html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <title>Accordion</title> 
<style>
#imageMenu{width:800px;height:200px;overflow:hidden;}

/*动画样式*/
#imageMenu ul *{transition:all linear 0.2s;}

#imageMenu ul{width:800px;height:200px;padding: 0; margin: 0; list-style: none}
#imageMenu li{float:left;}

#imageMenu ul li a{width: 73px;}

/*放大后的样式*/
#imageMenu ul li.big a {width:320px;}

#imageMenu li a{width:98px;height:200px;display:block;text-indent:9999px;border-right:2px solid #fff;cursor:pointer;overflow:hidden;}

#imageMenu li.landscapes a{background:url(http://img.mukewang.com/53451c66000170b503200200.jpg) no-repeat;}
#imageMenu li.people a{background:url(http://img.mukewang.com/53451cc900012a0303200200.jpg) no-repeat;}
#imageMenu li.nature a{background:url(http://img.mukewang.com/53451d020001336503200200.jpg) no-repeat;}
#imageMenu li.urban a{background:url(http://img.mukewang.com/53451d370001d17203200200.jpg) no-repeat;}
#imageMenu li.abstract a{background:url(http://img.mukewang.com/53451d5700013fd203200200.jpg) no-repeat;}

</style>
</head> 
<body> 
<div id="imageMenu">
	<ul>
	    <li class="landscapes">
	    	<a href="#link1">Landscapes</a>
	    </li>
	    <li class="people">
	    	<a href="#link1">People</a>
	    </li>
	    <li class="nature">
	    	<a href="#link1">Nature</a>
	    </li>
	    <li class="urban">
	    	<a href="#link1">Urban</a>
	    </li>
	    <li class="abstract">
	    	<a href="#link1">Abstract</a>
	    </li>
	</ul>
</div>
<script type="text/javascript">
window.onload=biger;
function biger() {
	var imageMenu=document.getElementById("imageMenu");
	var lis=document.getElementsByTagName("li");
	for(var i=0;i<lis.length;i++){
		lis[i].onmouseover=function(){
			var str=this.getAttribute("class");
			var abig = str.split(" ",2);//数组
			if (abig[1]==null) {
				abig[1]="big";
				var Sbig=abig.join(" ");//字符串
			}
			this.setAttribute("class",Sbig);
		}
		lis[i].onmouseout=function(){
			var str=this.getAttribute("class");
			var abig = str.split(" ",2);//数组
			if (abig[1]!==null) {
				abig[1]="";
				var Sbig=abig.join("");//字符串
			}
			this.setAttribute("class",Sbig);
		}
	}
}
</script>
</body>
</html>