// JavaScript Document
$(document).ready(function(){
	$.get("details.xml",{ },function(xml){
		$('detail',xml).each(function(i){
			aUsername = $(this).find("user").text();
			//alert("the user is " + aUsername);
		});
	});
	
	
});
			