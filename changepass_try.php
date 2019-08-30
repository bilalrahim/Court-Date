<?php
include "connect.php";
session_start();

$user = $_SESSION["tuser"];
$oldpass = $_POST["opass"];
$pass = $_POST["txtPass"];

$qry = "SELECT * FROM admin WHERE ID= '".$user."'";
$res=$con->query($qry);
$msg="";
if($res->num_rows > 0)
{

    $row = $res->fetch_assoc();
    if($row["pass"] == $oldpass)
    {
        $qwry="UPDATE admin SET pass='".$pass."' where ID='".$user."' ";
        $con->query($qwry);
        $msg="Password Changed Successfully.";
        header("Location:admin.php?Message=$msg");
    }
    else
    {

        $msg = "Invalid password";
        header("Location:changepass.php?Message=$msg");
    }
}

?>
