<?php
	include "connect.php";

	

	$name = $_POST["Jname"];
	$id = $_POST["Jid"];
	$cno = $_POST["Jc"];
	$qry = "INSERT INTO judges VALUES('".$id."','".$name."', '".$cno."')";

	//echo $qry;
	//$con->query($qry);
    
    if ($con->query($qry)) {
		$msg = "Registered";
	}
	else
		$msg = "Error!";

    //echo $msg;
        
	header("Location:addjudge.php?Message=$msg");
    
?>










