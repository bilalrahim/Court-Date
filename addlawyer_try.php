<?php
    include "connect.php";

    $id= $_POST["lawid"];
    $user = $_POST["lawname"];
    $contact = $_POST["lawcont"];

    $qry = "INSERT INTO lawyers VALUES ('".$id."','".$user."','".$contact."')";

 if ($con->query($qry)) {
		$msg = "Registered";
	}
	else
		$msg = "Error!";

    //echo $msg;
        
	header("Location:addlawyer.php?Message=$msg");
    






?>
