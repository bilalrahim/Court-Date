<?php
    include "connect.php";


    $user = $_POST["txtUser"];
    $pass = $_POST["txtPass"];

    $qry = "INSERT INTO admin VALUES ('".$user."','".$pass."')";

if ($con->query($qry)== TRUE)
{
   $msg="Successful ";

}
else
{
$msg = "Error! ";

}

header("Location:signup.php?Message=$msg");




?>
