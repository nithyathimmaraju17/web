<?php
	$sub=$_POST['sub'];
	$mon1=$_POST['mon1'];
	$mon2=$_POST['mon2'];
	$mon3=$_POST['mon3'];
	$mon4=$_POST['mon4'];
	$rem=$_POST['rem'];
	
	//Database connection
	$conn= new mysqli('localhost','root','','Subject');
	if($conn->connect_error){
		die('Connection failed : '.$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into registration(sub,mon1,mon2,mon3,mon4,rem)
							values(?,?,?,?,?,?)");
		$stmt->bind_param("siiiis",$sub,$mon1,$mon2,$mon3,$mon4,$rem);
		$stmt->execute();
		echo "registration succesfully....";
		$stmt->close();
		$conn->close();
	}
		
		

?>