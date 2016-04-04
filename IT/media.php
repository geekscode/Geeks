<html>
<head>
	<title>IT Broadcast</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/style.css">

	<script type="text/javascript" src="css/bootstrap/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="css/bootstrap/js/jquery.validate.js"></script>
	<script type="text/javascript" src="css/bootstrap/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="css/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<div class="navbar">
		    <div class="navbar-inner">
		    	<div class="nav-collapse collapse">
		    		<a class="brand" href="media.php?module=home"><span class="first">IT</span> <span class="second">Broadcast</span></a>		    		
		    			<?php include "menu.php"; ?>
		    	</div>
		    	<!--<div class="nav pull-right">		        		        		
		        		<li class="dropdown">
			         		<a href="###" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-fire icon-white"></i> MyAccount <strong class="caret"></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
					  		<ul class="dropdown-menu">				           										    	
						    	<li><a href="resume.php">Portofolio</a></li>
						    	<li><a href="logout.php">Logout</a></li>
				    		</ul>
					    </li>	         	 		        		            
		        </div>	-->	        	       
		    </div>	    
		</div>
		<div class="row-fluid">
			<div class="span12">
				<div class="btn-group pull-right">
					<a class="btn btn-large top-buttons" href="###" data-original-title="Print"><i class="icon-print"></i></a>
					<a class="btn btn-large top-buttons" href="###" data-original-title="Download"><i class="icon-download-alt"></i></a>
					<a class="btn btn-large top-buttons" href="###" data-original-title="Change-Color"><i class="icon-cog"></i></a>
				</div>
			</div>				
		</div>
	<!-- End Navbar -->

	<!-- Container -->
		<div class="container-fluid">
			<?php include "content.php"; ?>
		</div>	
	</div>
	<!-- End Container -->
	
	<!-- Footer -->
	<footer class="footer">
		<div class="container-fluid">
			<p>Designed and built with all the love in the world by <a href="">@bayu_nugro</a></p>
			<p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0"> Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a></p>
		</div>
	</footer>
</body>
</html>