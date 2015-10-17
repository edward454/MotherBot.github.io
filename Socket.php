
<?php
		echo"<script type='text/javascript'>$(document).ready(function(){
		console.log('working hete');
	});</script>";
	//publish.php
  require("phpMQTT.php");

  $host = "m11.cloudmqtt.com"; 
  $port = 14518;
  $username = "zinimqzr"; 
  $password = "k6rArjXKuujF"; 
  $message = "A000W010B000";
  //MQTT client id to use for the device. "" will generate a client id automatically

  $mqtt = new phpMQTT($host, $port, "ClientID".rand()); 

  if ($mqtt->connect(true,NULL,$username,$password)) {
    $mqtt->publish("/sub/1",$message, 0);
    $mqtt->close();
  }else{
    echo "Fail or time out<br />";
  }

?>
