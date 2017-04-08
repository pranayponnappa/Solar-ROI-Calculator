<html>
	<head>
		<title>Solar ROI activation</title>
		<link rel="stylesheet" href="./bootstrap.css">
		<link rel="stylesheet" href="./shift.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="./main.css">
		<script language="javascript">
		function validateForm() {
			var x = document.forms["activation"]["email"].value;
    		if (x == null || x == "") {
        		alert("Email must be filled out");
        		return false;
 	    	}

 			var x = document.forms["activation"]["pwd"].value;
    		if (x == null || x == "") {
    		    alert("Password must be filled out");
        		return false;
 	    	}
 	
 			var x = document.forms["activation"]["code"].value;
    		if (x == null || x == "") {
        		alert("Code must be filled out");
        		return false;
 	    	}
		}    
	</script>
	</head>

	<body>
		<div class="nav">
    		<div class="container">
        		<ul class="pull-left">
        			<li><strong>Solar ROI Calculator</strong></li>
        		</ul>
        		<ul class="pull-right">
        			<li><a href="./index.html">Home</a></li>
        			<li><a href="./signup.php">Sign Up</a></li>
        			<li><a href="./login.php">Log In</a></li>
    				<li><a href="http://www.solarchoice.net.au/blog/solar-power-system-payback-calculator">ROI Calculation chart</a></li>
        		</ul>
      		</div>
    	</div>
    	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    		<ol class="carousel-indicators">
    			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    			<li data-target="#myCarousel" data-slide-to="1"></li>
    			<li data-target="#myCarousel" data-slide-to="2"></li>
    			<li data-target="#myCarousel" data-slide-to="3"></li>
    		</ol>
    		<!-- Wrapper for slides -->
    		<div class="carousel-inner" role="listbox">
      			<div class="item active">
        			<img src="http://www.bookwormroom.com/wp-content/uploads/2013/12/Solar_panels_on_a_roof.jpg" alt="Chania" width="460" height="345">
      			</div>

      			<div class="item">
        			<img src="http://i.bnet.com/blogs/semprius-cpv.jpg" alt="Chania" width="460" height="345">
      			</div>
    
      			<div class="item">
        			<img src="http://cratussolutions.in/uploads/gallery/large/5463img21.jpg" alt="Flower" width="460" height="345">
      			</div>

      			<div class="item">
        			<img src="http://www.stlouiscountymn.gov/portals/0/Departments/PropertyManagement/solar%20and%20sun.jpg" alt="Flower" width="460" height="345">
      			</div>
    	</div>

    <!-- Left and right controls -->
    	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      		<span class="sr-only">Previous</span>
    	</a>
    	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      		<span class="sr-only">Next</span>
    	</a>
  	</div>
    <div class="panel-setup">
        <div class="container">
        	<div style="width:40%; float:left;">
			<h2><strong>Activation</strong></h2>
    		<p>Activate the account and check your return on investment</p>
    		<div class="row">
				<form action="" method="post" name="activation">
					<table>
						<tr><td>Email </td><td><input type="text" name="email" placeholder="Enter your Email ID"></td></tr>
						<tr><td>password </td><td><input type="password" name="password" placeholder="Enter your Password"></td></tr>
						<tr><td>activation code</td><td><input type"text" name="code" placeholder="Enter the code you received"></td></tr>
						<tr><td><input type="submit" value="submit" name="submit" onclick="return validateForm()"></td></tr>
					</table>
					<a href="http://weblab.cs.uml.edu/~psomayan/91513f2015/hw11/login.php">Login to check your returns</a>
				</form>
			</div>
			</div>
			<div style="width:40%; float:left;"><br><iframe width="420" height="315" src="https://www.youtube.com/embed/ZtS-AYWHetg" frameborder="0" allowfullscreen></iframe><br><br></div>
		</div>
	</div>
	<?php
		if(isset($_POST['submit']))
		{
			mysql_connect("localhost","psomayan","ps7439");
			mysql_select_db("psomayan");
			$username = $_POST['email'];
			$password = $_POST['password'];
			$code = $_POST['code'];
			$qry = "SELECT `email`, `code` FROM `sigin` where email = '$username' and password='$password'";
			$res1 = mysql_query($qry);
			$row = mysql_fetch_array($res1);
			$email = $row['email'];
			$dbcode = $row['code'];	
			if($email == $username)
			{
				if($dbcode == $code)
				{
					echo "if running";
					$res2 = mysql_query("update sigin set code = '1' where email = '$username' and password = '$password'");
					if($res2)	{
						header("location:login.php");
						echo "Updated code";
					}
				}
				else	{
					echo "Please enter proper code";
				}
			}
			else	{
				echo "Incorrect Email address";
			}
		}
	?>
	<div class="learn-more">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
      				<h3>Solar Energy Uses</h3>
      				<p>Solar energy has variety of uses, some of which are for heat, electricity etc.,</p>
      				<p><a href="http://www.mass.gov/eea/energy-utilities-clean-tech/renewable-energy/solar/">Learn more at Mass.gov</a></p>
      			</div>
        		<div class="col-md-4">
      				<h3>Panel Types</h3>
      				<p>They are of multiple types based upon what your need is.</p>
      				<p><a href="http://pureenergies.com/us/how-solar-works/types-of-solar-panels/">Learn about panels from PureEnergies</a></p>
        		</div>
      			<div class="col-md-4">
      				<h3>Solar Power in Massachusetts</h3>
      				<p>Almost every town and city in Massachusetts has a solar installation within its boundaries</p>
      				<p><a href="https://en.wikipedia.org/wiki/Solar_power_in_Massachusetts">Learn more using Wikipedia</a></p>
      			</div>
      		</div>
    	</div>	
	</div>
	</body>
</html>