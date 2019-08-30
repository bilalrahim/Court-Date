<!--Main nav-->

<form action="" method="post">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
  <span class="navbar-brand mb-0 h1">Adminstrator</span>


<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">

      <a class="nav-link" href="home.php">Visit page <span class="sr-only"></span></a>

    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Account
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="changepass.php">Change Password</a>
        <a class="dropdown-item" href="signup.php">Add account</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="logout.php">Log Out</a>
      </div>
    </li>
  </ul>
</div>
</nav>
</form>
<!-- Sidenav-->
<div class="side-menu">
<nav class="navbar navbar-default" role="navigation">

  <div class="side-menu-container">
    <ul class="nav navbar-nav">
      <!-- Dropdown-->
      <li class="active"><a href="case.php"><span class="glyphicon glyphicon-dashboard"></span> Update Case</a></li>
      <li class="panel panel-default" id="dropdown2">
          <a data-toggle="collapse" href="#dropdown-lvl2">
              <span class="glyphicon glyphicon-off"></span> Client <span class="caret"></span>
              </a>
              <div id="dropdown-lvl2" class="panel-collapse collapse">
                <div class="panel-body">
                  <ul class="nav navbar-nav">
                    <li><a href="newclient.php">Add Client</a></li>
                    <li><a href="clientinfo.php">Client Info</a></li>
                  </ul>
                </div>
              </div>
      </li>
      <li class="active"><a href="addlawyer.php"><span class="glyphicon glyphicon-dashboard"></span> Add Lawyer</a></li>
      <li class="active"><a href="addjudge.php"><span class="glyphicon glyphicon-dashboard"></span> Add Judge</a></li>
    </ul>
  </div>
</nav>
</div>
