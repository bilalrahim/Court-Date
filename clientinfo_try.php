
<?php
	include "connect.php";
?>


<html>
<head>

    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">

    <style>
        .tblh{
            background: #616060;
            font-size: 14px;
            color: white;
        }
        .tblro{
            font-size: 12px;
        }
        .tblre{
            font-size: 12px;
            background: #E9E8E8;

        }
    </style>
</head>
<body>

	<?php
	if (isset($_POST["clientid"])) {
			$Srch = $_POST["clientid"];
      $qry = "";
      $qry = "SELECT * FROM clients WHERE CLID='".$Srch."'";

      $res = $con->query($qry);
			$result = "";
      $class = "tblro";


			if ($res->num_rows>0)
      {
			    $result .= "<div class ='container'>";
					$result .= "<table align='center' class='table table-bordered'>";
					$result .= " <h2>Client Details</h2><tr class='tblh'><th>Client ID</th><th>Client Name</th><th>Address</th><th>Contact</th></tr>";
					while ($row = $res->fetch_assoc())
					{
	        //one row
	        	$result .="<tr class ='".$class."'>
	                	<td>
	                  	".$row['CLID']."
	                	</td>
	                	<td>
	                  	".$row['cname']."
	                	</td>
	                	<td>
	                  	".$row['address']."
	                	</td>
	                	<td>
	                  	".$row['contact']."
	                	</td>
	              	</tr>";

                    	 }
				$result .= "</table></div>";
			}
      
      else
			{
					$msg = "Invalid ID";
					header("Location:clientinfo.php?Message=$msg");
			}
			echo $result;

    }
 
			
	?>
</body>
</html>
