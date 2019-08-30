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
 <style >
   #head{
    color:black; font-size:14px; margin-bottom:30px; line-height:24px;
   }
 </style>
<html>
<head>
  
  <title> Admin</title>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="script.js"></script>
</head>

<body>
<?php include "nav.php";?>

    <form action="case_try.php" method="post">
            
            <div class= "topnav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-11" id="head" align="center">
                        <h2>Update Case</h2>
                    </div>
                </div>
            </div>
        </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <input type="text" name="txtUser" class="form-control col-sm-3" placeholder="Case ID" required>
                <div class="col-sm-5"></div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"></div>
                <textarea class="form-control col-sm-3 " name="desc" id="validationTextarea" placeholder="Enter description" required></textarea>
                <div class="col-sm-4"></div>
            </div>
            <div class= "form-group row">
            <div class="col-sm-4"></div>
            <div class="col-sm-2">
              <p class="font-weight-normal">Last Hearing Date</p>
            </div>
            <div class= "col-sm-6"></div>
            </div>
    <div class="form-group row">
      <div class="col-sm-4"></div>
      <div class="col-sm-3">
        <input type="date" name="dateFrom" required />
        <br/>
      </div>
        <div class= "col-sm-5"></div>
    </div>
    <div class= "form-group row">
      <div class="col-sm-4"></div>
      <div class="col-sm-2">
        <p class="font-weight-normal">Next Date</p>
      </div>
    </div>
      <div class= "col-sm-6"></div>
      <div class="form-group row">
        <div class= "col-sm-4"></div>
        <div class="col-sm-3">
          <input type="date" name="ndate" required  />
        </div>
        <div class= "col-sm-5"></div>
      </div>
      <div class="form-group row">
        <div class="col-sm-5"></div>
        <div class="col-sm-2">
          <input type="submit" name= "submit" value="Update" class="btn btn-success btn-block">
        </div>
        <div class="col-sm-5"></div>
      </div>


    
    <div class="form-group row">

                <div class="col-sm-4"></div>
                <?php
                        
                if (isset($_GET["Message"])) 
                {
                  echo "<div class='col-sm-3 alert alert-success' align='center'>";
                  echo $_GET["Message"];
                  echo "</div>";
                }
                ?>
      </div>
      <div class="col-sm-5"></div>
      </div>
    </form>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
