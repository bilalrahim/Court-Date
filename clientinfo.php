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
  <title> Client Info</title>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<!-- Navigation Bar-->
<?php include "nav.php"; ?>
  <form action="" method ="post">
    <div class="form-group row">
      <div class="col-sm-12"></div>
      <div class="col-sm-4"></div>
      <div class= "col-sm-3">
        <input type="text" name="clientid" placeholder="Client ID" class="form-control" required>
      </div>
      <div class="col-sm-5"></div>
    </div>
    <div class="form-group row">
      <div class="col-sm-6"></div>
      <div class="col-sm-1">
      <input type="submit" value="Submit" class="btn btn-success btn-block">
    </div>
      <div class="col-sm-5"></div>
  </div>
  <div class= "form-group row">
    <div class="col-sm-3"></div>
    <div class ="col-lg-6">
    <?php include "clientinfo_try.php";?>
  </div>
  <div class= "col-sm-3"></div>
</div>
<div class="form-group row">

                <div class="col-sm-4"></div>
                <?php
                        
                if (isset($_GET["Message"])) 
                {
                  echo "<div class='col-sm-3 alert alert-danger' align='center'>";
                  echo $_GET["Message"];
                  echo "</div>";
                }
                ?>
                <div class="col-sm-4"></div>
      
      </div>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</head>
</html>
