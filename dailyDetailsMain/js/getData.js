// JavaScript Document
function getData(){
	var xmlhttp;
	var user=document.getElementById("nameDetails").value += ".txt";
	var thisUser = document.getElementById("nameDetails").value
	//var userText = user + ".txt";
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	allText = xmlhttp.responseText;
	lines = allText.split('\n');
    document.getElementById("onScreenDisplay").innerHTML=allText;
	}
  }
xmlhttp.open("GET",user,true);
xmlhttp.send();
	}