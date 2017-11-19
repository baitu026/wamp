<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Demo</title>
    <style>
        body, input, select, button, h1 {
            font-size: 28px;
            line-height:1.7;
        }
    </style>
</head>

<body>

<h1>员工查询</h1>

<label>请输入员工编号：</label>
<input type="text" id="texts" />
<button id="search">查询</button>
<p id="result"></p>

<h1>员工新建</h1>
<label>请输入员工姓名：</label>
<input type="text" id="username" /><br>
<label>请选择员工性别：</label>
<select id="sexs">
    <option>女</option>
    <option>男</option>
</select><br>
<button id="save">保存</button>
<p id="createResult"></p>

<script>
    document.getElementById("search").onclick = function() {        //添加一个点击事件
        var request = new XMLHttpRequest();         //先实例化
        request.open("GET", "Deom.php?number=" + document.getElementById("texts").value);//设置传递方式是GET 设置链接文件 传一个参数
        request.send();         //发送信息
        request.onreadystatechange=function() {     //
            if (request.readyState === 4) {
                if (request.status === 200) {
                    document.getElementById("result").innerHTML = request.responseText;
                }
                else {
                    alert("错误" + request.status);
                }
            }
        }
    }

    document.getElementById("save").onclick = function() {
        var request = new XMLHttpRequest();
        request.open("POST", "Deom.php");
        var data = "name=" + document.getElementById("username").value
            + "&sex=" + document.getElementById("sexs").value;
        request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        request.send(data);
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("createResult").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }
</script>
</body>
</html>