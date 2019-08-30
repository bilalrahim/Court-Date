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
<html>
<head>
  <title>New Admin</title>
  <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>


<body>
    <form action="signup_try.php" method="post">
            <div class= "topnav">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-11" id="heading" align="center">
                        <h2>Add Admin</h2>
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
            <div class="form-group row">
                <div class="col-lg-12"></div>
            </div>
            <div class="form-group row">
                <div class="col-lg-12"></div>
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
                <input type="submit" value="Add" class="btn btn-success col-sm-3">
                <div class="col-sm-5"></div>
            </div>
          
          <!--add a home button-->
            <div class="form-group row">
                <div class="col-sm-4"></div>
                    <?php
                        if (isset($_GET["Message"])) {
                            echo "<div class='col-sm-3 alert alert-light' align='center'>";
                            echo $_GET["Message"];
                            echo "</div>";
                        }
                    ?>
                </div>
                <div class="col-sm-5"></div>
    	</form>
    </body>
    </html>
