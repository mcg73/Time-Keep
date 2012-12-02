
$.get("mcgraw.txt", function(data){
	theStop = "+";
	for(i=0;i<data.length;i++){
		if(data[i] === theStop){
			alert("yes")
		}
		
	}
  $('#bButton').on('click', function(){
		alert(document.getElementById('hoursHold').value);
		
  });
});