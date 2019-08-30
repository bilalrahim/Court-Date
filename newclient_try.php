<?php 
	include "connect.php";

	$id = $_POST["txtID"];
	$name = $_POST["txtname"];
	$addr = $_POST["txtaddress"];
	$cont  = $_POST["txtcont"];
	$law =$_POST["txtLID"];
	$Jid =$_POST["txtJID"];
	$tit= $_POST["txtTitle"]; 
	$casei= $_POST["txtcid"];
	$next_date = date('Y-m-d', strtotime($_POST['dateFrom']));

	$qry = "INSERT INTO clients VALUES('".$id."','".$name."', '".$addr."', '".$cont."')";
	
    if ($con->query($qry))
		{
		$q= "INSERT INTO casedetails VALUES ('".$id."','".$law."','".$casei."','".$Jid."','".$tit."','".$next_date."')";
		$con->query($q);
		//$up="INSERT INTO c_date(caseID,next_date) VALUES('".$casei."','".$current_date."')";
		//$con->query($up);
		$msg ="Added";
		}
		else
		{
		$msg = "Error! ";
		}

	header("Location:newclient.php?Message=$msg");
	
	?>