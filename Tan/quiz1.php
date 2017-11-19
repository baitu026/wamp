<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>增加节点</title> 
<script type="text/javascript"> 
   function newPicture() { 
       var picElement = document.createElement("img"); 
       picElement.src = "images/success.jpg"; 
       picElement.width = 100; 
       picElement.height = 100; 
       document.body.appendChild(picElement); 
   } 
    
   function newNode() { 
       var olElement = document.getElementById('answers'); 
       var liElement = document.createElement('li'); 
        
       var inputElement = document.createElement('input'); 
       inputElement.type = "text"; 
       inputElement.name = "answer"; 
       liElement.appendChild(inputElement); 
       olElement.appendChild(liElement); 
   } 
</script> 
</head> 
 
<body> 
 <div> 
    <input type="button" name="button" value="增加一张图片" onclick="javascript:newPicture();"/>    
    <input type="button" name="button" value="增加一个选项" onclick="javascript:newNode();"/><br /> 
    <ol id="answers"> 
        <li><input type="text" name="answer" /></li> 
    </ol> 
 </div> 
</body> 
</html>