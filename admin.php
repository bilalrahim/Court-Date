

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
<!--Replace admin.php with case.php-->
<head>
  <title> Admin</title>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="script.js"></script>
</head>

<body>

<!-- Navigation Bar-->
<?php

  include "nav.php";

?>

<div id="place-holder">
</div>
<!---
<script type="text/javascript">
$(document).ready(function(){
  $("#nav-placeholder").load("nav.html");
});
</script>-->
<!--end of Navigation bar-->
<!-- <script>
  $(document).ready(function() {
    $("button").click(function(){
    $("#my-div").load("nav.html");
  })
  });
</script> -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</head>
</html>
