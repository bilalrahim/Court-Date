
<html>
<head>
	<title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
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
	<form action="login.php" method="post">
    <div class= "topnav">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-11" id="heading" align="center">
                  <h2>Find My Court Date</h2>
              </div>
            <div class="col-lg-1 ">
              <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active" id ="admin" href="login.php">Admin</a>
                  </li>
                </ul>
                </div>
              </div>
            </div>
          </div>
        </form>

		<form action="" method="post"> 
        <div class="form-group row">
          <div class="col-sm-3"></div>
          <div class="col-sm-1">Search Option</div>
            <div class="col-sm-3">
                <select name="sType" class="form-control">
                    <option value="caseID">Case Details</option>
                    <option value="lawyerID">Lawyer Details</option>
										<option value="hearings">Hearing Description</option>
                </select>
            </div>
            <div class="col-sm-5"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <div class="col-sm-3">
                <input type="text" name="txtSrch" placeholder="Case ID/Lawyer ID" class="form-control" required>
            </div>
            <div class="col-sm-5"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <div class="col-sm-3" align="right">
                <input type="submit" value="Search" class="btn btn-success btn-block">
            </div>
            <div class="col-sm-5"></div>
        </div>
			</div>
			<div class ="col-lg-6">
				<?php include "home_try.php";?>
			</div>
		</div>


	</form>
					<!-- For Errror Message.-->
                <div class="form-group row">
                  <div class="col-sm-4"></div>
                <?php

                  if (isset($_GET["Message"])) 
                  {
                        echo "<div class='col-sm-3 alert alert-danger' align='center'>";
                        echo $_GET["Message"];
                        echo "</div>";
                        unset($_GET["Message"]);
                   }
                ?>
                  <div class="col-sm-8"></div>
                </div>
	</form>
</body>
</html>
