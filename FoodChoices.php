
<script type="text/javascript">
$(document).ready(function(){
	console.log("Ready to Cooking");
	$('#footer').click(function(){
		console.log("it is cooking");
		//create web socket here
		getSocket();
	
	});
});
</script>
<?php
	function getSocket(){
		
	}
?>

<script type="text/javascript">
	function getSocket(){	
		var wsUri = "ws://echo.websocket.org";
		var output;
		var websocket ;

		function init(){
			output = document.getElementById("output");
			testWebSocket();
		}

		function testWebSocket(){
			websocket = new WebSocket(wsUri);
			websocket.onopen = function(evt){onOpen(evt)};
			websocket.onclose = function(evt){onClose(evt)};
			websocket.onmessage = function(evt){onMessage(evt)};
			websocket.onerror  = function(evt){onError(evt)};
		}

		function onOpen(evt){
			writeToScreen("CONNECTED");
			doSend("edward sujono");
		}

		function onMessage(evt){
			writeToScreen(evt.data);
		}



		function doSend(message){
			writeToScreen(message);
			websocket.send(message);
		}

		function writeToScreen(message){
			output.innerHTML = message;
		}

	}
</script>


<style type="text/css">
table{
	position: absolute;
	top: 0px;
	right: 30%;
	z-index: 0;
}

#Background{
	height: 800px;
}

@media screen and (min-width: 480px) {
  table{
  	position: absolute;
  	right: 45%;
  }
}

#Background{
	height: 1100px;
}

#footer{
	display: block;
	cursor:  pointer;
}

#Ingridients{
	padding-bottom: 10px;
}

</style>


<div id="Ingridients">
	<div id="Suggestion">
	</div>
	<h2>Available Ingridients: </h2>
	<br/>
<table>
	<tr>
		<h2>50%</h2>
		<img src="Image/Noodle.png">
	</tr>
	<tr>
		<h2>50%</h2>
		<img src="Image/ketchup.png">
	</tr>
	<tr>
		<h2>30%</h2>
		<h2 id="output"></h2>
		<img  src="Image/salt.png">
	</tr>
	
</table>
</div>

