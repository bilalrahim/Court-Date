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
	<form action="" method="post">
		<!--<div class="Page-header mb-5" align="center">
            <h2>Case Details</h2>
        </div>-->



	</form>
	<?php
	if (isset($_POST["txtSrch"])) {
			$Srch = $_POST["txtSrch"];
    	$type = $_POST["sType"];

            //echo $type;

            $qry = "";
            if($type == "caseID")
                $qry = "SELECT cname,Lname,jname,courtno,next_date from casedetails inner join judges
		                    on casedetails.JID=judges.JID inner join lawyers on casedetails.LID=lawyers.LID
		                    inner join clients on casedetails.CLID=clients.CLID  where caseID= '".$Srch."'";
            elseif($type =="lawyerID")
                $qry = "SELECT LID,Lname,contact FROM lawyers WHERE LID = '".$Srch."'";
						else
								$qry ="SELECT lastdate,hearingdesc FROM Hearings WHERE caseID='".$Srch."'";

						$res = $con->query($qry);
						$result = "";
            $class = "tblro";
            $flag = 1;

			if ($res->num_rows>0) {
				if($type=="caseID")
				{
      		$result .= "<div class ='container'>";
					$result .= "<table align='center' class='table table-bordered'>";
					$result .= " <h2>Case Details</h2><tr class='tblh'><th>Client Name</th><th>Lawyer Name</th><th>Judge Name</th><th>Court No</th><th>Date</th></tr>";
					while ($row = $res->fetch_assoc())
					{
	        //one row
	        	$result .="<tr class ='".$class."'>
	                	<td>
	                  	".$row['cname']."
	                	</td>
	                	<td>
	                  	".$row['Lname']."
	                	</td>
	                	<td>
	                  	".$row['jname']."
	                	</td>
	                	<td>
	                  	".$row['courtno']."
	                	</td>
	                	<td>
	                  	".$row['next_date']."
	                	</td>
	              	</tr>";

                    	$flag++;

                    	if(($flag)%2==0)
                        	$class = "tblre";
                    	else
                        	$class = "tblro";
				}
				$result .= "</table></div>";
			}
			elseif($type=="lawyerID")
			{
				$result .= "<div class ='container'>";
				$result .= "<table align='center' class='table table-bordered'>";
				$result .= "<h2>Lawyer Details</h2><tr class='tblh'><th>Lawyer ID</th><th>Lawyer Name</th><th>Contact</th></tr>";
				while ($row = $res->fetch_assoc())
				{
				//one row
					$result .= "<tr class ='".$class."'>
									<td>
										".$row['LID']."
									</td>
									<td>
										".$row['Lname']."
									</td>
									<td>
										".$row['contact']."
									</td>
								</tr>";
										$flag++;

										if(($flag)%2==0)
												$class = "tblre";
										else
												$class = "tblro";
			}
			$result .= "</table></div>";
			}
			else
			{
					$result .= "<div class ='container'>";
					$result .= "<table align='center' class='table table-bordered'>";
					$result .= "<h2>Hearing Description</h2><tr class='tblh'><th>Order Date</th><th>Description</th></tr>";
					while ($row = $res->fetch_assoc())
					{
					//one row
						$result .= "<tr class ='".$class."'>
										<td>
											".$row['lastdate']."
										</td>
										<td>
											".$row['hearingdesc']."
										</td>
									</tr>";
											$flag++;

											if(($flag)%2==0)
													$class = "tblre";
											else
													$class = "tblro";
				}
				$result .= "</table></div>";
				}
			}
			else
			{
					$msg = "Invalid ID";
					header("Location:home.php?Message=$msg");
			}

			echo $result;
			
		}
		
	?>
</body>
</html>
