<?php 

	require("models/mysql_login.php"); 
	$id = $_GET["id"];
	$query = "SELECT * FROM menuId WHERE id='$id'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$data = json_decode($row['categories'],true);



 ?>

<!DOCTYPE html>

<html lang="en">

	<head>
	
		<meta charset="utf-8" />
		
		<title>Create your Menu</title>
		
		<!-- Bootstrap CSS Files -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css" />
		
		<!-- Personal CSS Files -->
		<link rel="stylesheet" type="text/css" href="" />
	
		<!--jQuery File-->
		<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		
		<!-- Bootstrap JS Files -->
		<script language="javascript" type="text/javascript" src="bootstrap/js/bootstrap.js" ></script>
		
		<style>
			table th.cntr { text-align: center; }
			
			body {background-image: url("designer_shit/back.png"); background-repeat: repeat-x;}
		
		
		
		</style>
		
	</head>
	
	<body>
	
		<header class="top-nav" style="margin-bottom: 5%;">
			
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="brand" href="#"><img src="designer_shit/icon.png" style="height:90%; margin-left:-20px;"></a>
						<div class="nav-collapse collapse">
							<ul class="nav">
								<li class="active"><a href="#">Home</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
							
							<form class="navbar-search offset1">
								<input type="text" class="search-query span4" placeholder="Search..." />
							</form>
							
							
							<ul class="nav pull-right">
								<li class="dropdown pull-right">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										John Doe
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">My Preferences</a></li>
										<li><a href="#">Account Settings</a></li>
										<li><a href="#">Log Out</a></li>
									</ul>
								</li>
							</ul>
							
						</div><!--/.nav-collapse -->
					</div>
				</div>
			</div>
		
		</header>
		
		<div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Menus</li>
              <li><a href="#">Menu A</a></li>
              <li><a href="#">Menu B</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
        <div class="span9">
        	
        	<table class="table table-striped" >
        			
        			<?php 
        				$x = $row['restaurantId'];
        				$res = mysql_query("SELECT * FROM restaurant WHERE id='$x'");
        				$arr = mysql_fetch_array($res);
        				
        				echo "<thead>";
        				echo "<tr><th colspan='5' class='cntr'>".$arr["name"]."</th></tr>";
        				echo "<tr><th colspan='5' class='cntr'>".$arr["location"]."</th></tr>";
        			
        			
        				
        					echo "<tr><th colspan='5' class='cntr'>".$data['category']."</th></tr>";
        					echo "<tr><th></th><th> Item</th><th> Ingredients</th><th> Allergens</th><th> Price</th></tr>";
									echo "</thead>";
									echo "<tbody>";
								
									for($i = 0; $i < count($data['data']); $i++) {
										echo "<tr>";
										if($data['data'][$i]['veg'])
										echo "<td><p>Veg</p></td>";
										else echo "<td><p>Non-Veg</p></td>";
										echo "<td><p>".$data['data'][$i]['itemname']."</p></td>";
										echo "<td><p>".$data['data'][$i]['description']."</p></td>";
										echo "<td><p>";
										if($data['data'][$i]['allergyd'])
										echo " Dairy, ";
										if($data['data'][$i]['allergyn'])
										echo " Nuts, ";
										if($data['data'][$i]['allergyf'])
										echo " Fish, ";
										if($data['data'][$i]['allergycw'])
										echo " Cereal/Wheat";
										echo "</p></td>";
										
										echo "<td><p>".$data['data'][$i]['price']."</p></td>";
										
										echo "</tr>";
									
									echo "</tbody>";
        				}
        		
        			?>
        		
        	</table>
        	
        	
        
        </div>
      
      </div> <!-- end row fluid_ -->
      
    </div> <!-- End container -->
		
		
		
	
	</body>
	
	
</html>
