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
  #head{
    color:black; font-size:14px; margin-bottom:30px; line-height:24px;
   }
  </style>

<html>
<head>
  <title>New Client</title>
  <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
    <?php include "nav.php" ?>
      <form action="newclient_try.php" method="post">
              <div class= "topnav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-11" id="head" align="center">
                        <h2>Add CLient</h2>
                    </div>
                </div>
            </div>
        </div>
              <div class="form-group row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-4">
                    <input type="text" name="txtname" class="form-control" placeholder="Client Name" required>
                  </div>

                  <div class="col-sm-2"></div>
                   <div class="col-sm-4">
                    <input type="text" name="txtLID" class="form-control " placeholder="Lawyer ID">
                  </div>
                  <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-4">
                    <input type="text" name="txtID" class="form-control" placeholder="Client ID" required>
                  </div>
                  <div class="col-sm-2"></div>
                  <div class="col-sm-4">
                    <input type="text" name="txtcid" class="form-control " placeholder="Case ID">
                  </div>
                  <div class="col-sm-1"></div>
              </div>

              <div class="form-group row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-4">
                    <input type="text" name="txtaddress" class="form-control " placeholder="Address" required>
                  </div>
                  <div class="col-sm-2"></div>
                  <div class="col-sm-4">
                    <input type="text" name="txtJID" class="form-control " placeholder="Judge ID" >
                  </div>
                  <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                  <input type="text" name="txtcont" class="form-control" placeholder="Contact" required>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                <div class="mb-0">
                  <textarea class="form-control "name="txtTitle" id="validationTextarea" placeholder="Case Title"></textarea>
                </div>
              </div>
             <div class="col-lg-1"></div>
              </div> 
  <!--            <div class="form-group row">
                  <div class="col-sm-7"></div>
                  <div class="col-sm-4">
                    <input type="text" name="txtcid" class="form-control " placeholder="Case ID">
                  </div>
                  <div class="col-sm-1"></div>
              </div>
            -->

 <!--            <div class="form-group row">
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4">
                    <input type="text" name="txtLID" class="form-control " placeholder="Lawyer ID">
                  </div>
                  <div class="col-sm-4"></div>
              </div>
-->
            <!--  <div class="form-group row">-->
<!--                  <div class="col-sm-4"></div>
                  <div class="col-sm-4">
                    <input type="text" name="txtJID" class="form-control " placeholder="Judge ID" >
                  </div>
                  <div class="col-sm-4"></div>
              </div>
            -->
   <!--           <div class="form-group row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                <div class="mb-0">
                  <label for="Textarea">Case Title</label>
                  <textarea class="form-control "name="txtTitle" id="validationTextarea" placeholder="Case Title"></textarea>
                </div>
              </div>
             <div class="col-lg-4"></div>
            </div>-->
            <div class= "form-group row">
              <div class="col-sm-1"></div>
              <div class="col-sm-2">
                <p class="font-weight-normal">Hearing Date</p>
              </div>
              <div class= "col-sm-9"></div>
            </div>
              <div class="form-group row">
                <div class= "col-sm-1"></div>
                <div class="col-sm-3">
                  <input type="date" name="dateFrom" required />
                </div>
              <div class= "col-sm-4"></div>
                <input type="submit" value="Add" class="btn btn-success col-sm-2">
              <div class="col-sm-2"></div>
              </div>
        
          
              <div class="form-group row">
                  <div class="col-sm-4"></div>
                      <?php
                          if (isset($_GET["Message"])) {
                              echo "<div class='col-sm-4 alert alert-light' align='center'>";
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
