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
  <title>New Lawyer</title>
  <link href="css/bootstrap.min.css" rel="stylesheet"/>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>


<body>
  <?php include "nav.php";?>
    <form action="addlawyer_try.php" method="post">
            <div class="page-header mb-5" align="center">
                <h2>Add Lawyer</h2>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <input type="text" name="lawid" class="form-control col-sm-4" placeholder="ID" required>
                <div class="col-sm-4"></div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"></div>
                    <input type="text" name="lawname" class="form-control col-sm-4" placeholder="Lawyer Name" required>
                <div class="col-sm-4"></div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"></div>
                    <input type="text" name="lawcont" class="form-control col-sm-4" placeholder="Contact" required>
                <div class="col-sm-4"></div>
            </div>

           <div class="form-group row">
                <div class="col-sm-4"></div>
                <input type="submit" value="Add" class="btn btn-success col-sm-4">
                <div class="col-sm-4"></div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                    <?php
                        if (isset($_GET["Message"])) {
                            echo "<div class='col-sm-4 alert alert-success' align='center'>";
                            echo $_GET["Message"];
                            echo "</div>";
                        }
                    ?>
                </div>
                <div class="col-sm-4"></div>
            </div>
    	</form>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
    </html>
