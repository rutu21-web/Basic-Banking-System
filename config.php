<?php
  
  
    $conn = mysqli_connect('localhost','root','','bank');
	
	
	if(!$conn){
		die("Couldn't connect to databsae due to the following error--> ".mysqli_connect_error());
	}
?>	
	