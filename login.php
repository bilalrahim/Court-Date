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
	<form action="login_try.php" method="post">
        <div class= "topnav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-11" id="heading" align="center">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class= "form-group row">
            <div class="col-lg-12"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <input type="text" name="txtUser" class="form-control col-sm-3" placeholder="User Name" required>
            <div class="col-sm-5"></div>
        </div>

        <div class="form-group row">
            <div class="col-sm-4"></div>
                <input type="password" name="txtPass" class="form-control col-sm-3" placeholder="Password" required>
            <div class="col-sm-5"></div>
        </div>

       <div class="form-group row">
            <div class="col-sm-4"></div>
            <input type="submit" value="Login" class="btn btn-success col-sm-3">
            <div class="col-sm-5"></div>
        </div>

        <div class="form-group row">
            <div class="col-sm-4"></div>
                <?php
                    if (isset($_GET["Message"])) {
                        echo "<div class='col-sm-3 alert alert-danger' align='center'>";
                        echo $_GET["Message"];
                        echo "</div>";
												$msg="";
                    }
                ?>
            </div>
            <div class="col-sm-5"></div>
        </div>
	</form>
</body>
</html>
