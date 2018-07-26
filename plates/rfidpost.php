<?php
	
	
	$RFID=$_POST["rfid"];
	
	$Write="<p>RFID: " . $RFID . "</p>";
	
	file_put_contents('rfidread.html',$Write);
	
	file_get_contents('http://localhost:8000/readerupdate?plateid=' . $RFID . '');

?>