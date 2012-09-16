<?php

require("../models/mysql_login.php");

$query = "SELECT * FROM restaurant ORDER BY name";

$row = mysql_fetch_array(mysql_query($query));

?>
<!DOCTYPE html>
<html lan="en">
<head>
	
		<title> menu&amp;me</title>
		<link href="css/index.css" type="text/css" rel="stylesheet" />
		<script src="js/index.js"></script>
    
    <link type="text/css" rel="stylesheet" href="menu.css" />
    <link type="text/css" rel="stylesheet" href="overmenu.css" />

</head>
<body>


    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">menu&me</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">home</a></li>
              <li><a href="#about">about</a></li>
              <li><a href="#contact">contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Alphabetical Search</li>
              <li><a href="#A">A-C</a></li>
              <li><a href="#D">D-F</a></li>
              <li><a href="#G">G-I</a></li>
              <li><a href="#M">M-O</a></li>
              <li><a href="#P">P-R</a></li>
              <li><a href="#S">S-U</a></li>
              <li><a href="#V">V-X</a></li>
              <li><a href="#Y">Y-Z</a></li>
         

            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div id= "herp" class="hero-unit">
            <h1>Menus</h1>
            <p><?php foreach($row as $eacas) echo $eacas;?></p>
            
          </div>
          <div class="row-fluid"><!--/row-->
            <div class="span4" id="ac">
              <h2 id="A">A</h2>
              <?php foreach($row as $entry){
				  if(substr($entry['name'],0) == "A" || substr($entry['name'],0) == "a"){
				  	echo "<a href='../menu_view.php?id=".$entry['id']."'>".$entry['name']."</a><br>";
				  }
			  } ?>
            </div><!--/span-->
            <div class="span4">
              <h2>B</h2>
              <?php foreach($row as $entry){
				  if(substr($entry['name'],0) == "B" || substr($entry['name'],0) == "b"){
				  	echo "<a href='../menu_view.php?id=".$entry['id']."'>".$entry['name']."</a><br>";
				  }
			  } ?>
            </div><!--/span-->
            <div class="span4">
              <h2>C</h2>
              <?php foreach($row as $entry){
				  if(substr($entry['name'],0) == "C" || substr($entry['name'],0) == "c"){
				  	echo "<a href='../menu_view.php?id=".$entry['id']."'>".$entry['name']."</a><br>";
				  }
			  } ?>
              </div><!--/span-->
              
              
          </div><!--/row-->
          <div class="row-fluid">
                  <div class="span4">
              <h2 id="D">D</h2>
              <?php foreach($row as $entry){
				  if(substr($entry['name'],0) == "D" || substr($entry['name'],0) == "d"){
				  	echo "<a href='../menu_view.php?id=".$entry['id']."'>".$entry['name']."</a><br>";
				  }
			  } ?>
            </div><!--/span-->
            <div class="span4">
              <h2>E</h2>
              <?php foreach($row as $entry){
				  if(substr($entry['name'],0) == "E" || substr($entry['name'],0) == "e"){
				  	echo "<a href='../menu_view.php?id=".$entry['id']."'>".$entry['name']."</a><br>";
				  }
			  } ?>
            </div><!--/span-->
            <div class="span4">
              <h2>F</h2>
              <?php foreach($row as $entry){
				  if(substr($entry['name'],0) == "F" || substr($entry['name'],0) == "f"){
				  	echo "<a href='../menu_view.php?id=".$entry['id']."'>".$entry['name']."</a><br>";
				  }
			  } ?>
              </div><!--/span-->
              
            
            </div><!--/row-->
          <div class="row-fluid">
                  <div class="span4">
              <h2 id="G">G</h2>
              <a href="#">Applebees</a><br>
              <a href="#">Applebees</a><br>
              <a href="#">Applebees</a><br>
            </div><!--/span-->
            <div class="span4">
              <h2>H</h2>
              <a href="#">Applebees</a><br>
            </div><!--/span-->
            <div class="span4">
              <h2>I</h2>
              <a href="#">Applebees</a><br>
              </div><!--/span-->
          </div><!--/row-->
          
          
          <div class="row-fluid">
                  <div class="span4">
              <h2 id="J">J</h2>
              <a href="#">Applebees</a><br>
              <a href="#">Applebees</a><br>
              <a href="#">Applebees</a><br>
            </div><!--/span-->
            <div class="span4">
              <h2>K</h2>
              <a href="#">Applebees</a><br>
            </div><!--/span-->
            <div class="span4">
              <h2>L</h2>
              <a href="#">Lucy's Lovely Lemonade</a><br>
              </div><!--/span-->
          </div><!--/row-->
          
         
          <div class="row-fluid">
                  <div class="span4">
              <h2 id="M">M</h2>
              <a href="#">Applebees</a><br>
              <a href="#">Applebees</a><br>
              <a href="#">Applebees</a><br>
            </div><!--/span-->
            <div class="span4">
              <h2>N</h2>
              <a href="#">Applebees</a><br>
            </div><!--/span-->
            <div class="span4">
              <h2>O</h2>
              <a href="#">Applebees</a><br>
              </div><!--/span-->
          </div><!--/row-->
          
          
          <div class="row-fluid">
                  <div class="span4">
              <h2 id="P">P</h2>
              <a href="#">Applebees</a><br>
              <a href="#">Pratik's Pretty Patties</a><br>
              <a href="#">Applebees</a><br>
            </div><!--/span-->
            <div class="span4">
              <h2>Q</h2>
              <a href="#">Applebees</a><br>
            </div><!--/span-->
            <div class="span4">
              <h2>R</h2>
              <a href="#">Rahul's Russion Ramen</a><br>
              </div><!--/span-->
          </div><!--/row-->
          
        
          <div class="row-fluid">
                  <div class="span4">
              <h2 id="S">S</h2>
              <a href="#">Applebees</a><br>
              <a href="#">Applebees</a><br>
              <a href="#">Applebees</a><br>
            </div><!--/span-->
            <div class="span4">
              <h2>T</h2>
              <a href="#">Applebees</a><br>
            </div><!--/span-->
            <div class="span4">
              <h2>U</h2>
              <a href="#">Applebees</a><br>
              </div><!--/span-->
          </div><!--/row-->
          
       
          <div class="row-fluid">
                  <div class="span4">
              <h2 id="V">V</h2>
              <a href="#">Applebees</a><br>
              <a href="#">Applebees</a><br>
              <a href="#">Applebees</a><br>
            </div><!--/span-->
            <div class="span4">
              <h2>W</h2>
              <a href="#">Applebees</a><br>
            </div><!--/span-->
            <div class="span4">
              <h2>X</h2>
              <a href="#">Applebees</a><br>
              </div><!--/span-->
          </div><!--/row-->
          
        
          <div class="row-fluid">
                  <div class="span4">
              <h2 id="Y">Y</h2>
              <a href="#">Applebees</a><br>
              <a href="#">Applebees</a><br>
              <a href="#">Applebees</a><br>
            </div><!--/span-->
            <div class="span4">
              <h2>Z</h2>
              <a href="#">Applebees</a><br>
            </div><!--/span-->
          
            
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>


           
</body>
</html>