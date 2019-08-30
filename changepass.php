
 <?php
  session_start();
  if(isset($_SESSION["tuser"]))
  {

  }
  else
  {
    header("Location:home.php");
  }
 ?>
<html>

<head>
	<title>Sign In</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bclr{
    
            background: white;
        }
        .topnav {
          
          background: #0D0040;
        }
        #heading
        {
          color: white;
          font-family: serif;

        }
        #admin{
          color: white;

        }
        
    </style>
</head>
<body class="bclr">
	<form action="changepass_try.php" method="post">
        <div class= "topnav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-11" id="heading" align="center">
                        <h2>Change Password</h2>
                    </div>
                    <div class="col-lg-1 ">
                        <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" id ="admin" href="case.php">Home</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class= "form-group row">
            <div class="col-lg-12"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <input type="password" name="opass" id ="pass" onblur="checkpass()" class="form-control col-sm-3" placeholder="old password" required>
            <div class="col-sm-5"></div>
        </div>

        <div class="form-group row">
            <div class="col-sm-4"></div>
                <input type="password" name="txtPass" class="form-control col-sm-3" placeholder="new password" required>
            <div class="col-sm-5"></div>
        </div>

       <div class="form-group row">
            <div class="col-sm-4"></div>
            <input type="submit" value="Change" class="btn btn-success col-sm-3">
            <div class="col-sm-5"></div>
        </div>

        <div class="form-group row">
            <div class="col-sm-4"></div>
                <?php
                    if (isset($_GET["Message"])) {
                        echo "<div class='col-sm-4 alert alert-danger' align='center'>";
                        echo $_GET["Message"];
                        echo "</div>";
                    }
                ?>
            </div>
            <div class="col-sm-4"></div>
        </div>
	</form>
</body>
<script type="text/javascript">
function checkpass(){
    var name = document.getElementById("pass").value;

}
</script>
</html>
