<?php
	$Temp=$_POST["plateid"];
	
	$Write="<p>RFID: " . $Temp . "</p>";
	
	file_put_contents('sensor.html',$Write);

?>