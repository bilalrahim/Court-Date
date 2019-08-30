<?php
	include "connect.php";


	$current_date = date('Y-m-d', strtotime($_POST['dateFrom']));
	$u=$_POST["txtUser"];
	$des=$_POST["desc"];
	$next_date= date('Y-m-d', strtotime($_POST['ndate']));
	$qry="SELECT * FROM casedetails WHERE caseID = '".$u."'";



	$res=$con->query($qry);
	if($res->num_rows > 0)
	{
		$q="INSERT INTO hearings VALUES('".$u."','".$current_date."', '".$des."')";
		if($con->query($q))
		{
			$up="INSERT INTO c_date(caseID,next_date) VALUES('".$u."','".$next_date."')";
			$con->query($up);
			$msg="Successful";	

			
		}
	}
	else
	{
		$msg ="Incorrect case ID";

	}
 
	header("Location:case.php?Message=$msg");

?>
