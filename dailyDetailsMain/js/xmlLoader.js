// JavaScript Document
$(document).ready(function(){
if (window.XMLHttpRequest)
  {
  xhttp=new XMLHttpRequest();
  }
else // IE 5/6
  {
  xhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xhttp.open("GET","details.xml",false);
xhttp.send();
xmlDoc=xhttp.responseXML;
alert("this is good" + xmlDoc);
});