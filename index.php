<html>
	<head>
	<title>Solar ROI Signup Page</title>
		<link href="./shift.css" rel="stylesheet">
	    <link rel="stylesheet" href="./bootstrap.css">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	    <link rel="stylesheet" href="./main.css">
	    <script language="javascript">
			function validateForm() 
			{
    			var x = document.forms["signup"]["name"].value;
    			if (x == null || x == "") {
    	    		alert("Name must be filled out");    
        			return false;
    			}
    			var x = document.forms["signup"]["email"].value;
    			if (x == null || x == "") {
        			alert("Email must be filled out");
        			return false;
 	    		}
 	    		var x = document.forms["signup"]["email"].value;
    			var atpos = x.indexOf("@");
    			var dotpos = x.lastIndexOf(".");
    			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        			alert("Not a valid e-mail address. Type in the format 'name@domain.com'");
        			return false;
    			}
 				var x = document.forms["signup"]["pwd"].value;
    			if (x == null || x == "") {
        			alert("Password must be filled out");
        			return false;
 	    		}
 				var x = document.forms["signup"]["vpwd"].value;
    			if (x == null || x == "") {
        			alert("Verify Password must be filled out");
        			return false;
 	    		}
    			if(document.getElementById("gender1").checked == true) {
    			}
    			else if(document.getElementById("gender2").checked == true) {
    			}
    			else	{
    				alert("Gender must be filled out");
				}
        		return false;
			}
			</script>
	</head>
	<body>
	<div class="nav">
    	<div class="container">
        	<ul class="pull-left">
        		<li><strong>Solar ROI Calculator<strong></li>
        	</ul>

        	<ul class="pull-right">
        		<li><a href="index.php">Home</a></li>
        		<li><a href="index.php">Sign Up</a></li>
        		<li><a href="login.php">Log In</a></li>
    			<li><a href="http://www.solarchoice.net.au/blog/solar-power-system-payback-calculator">ROI Calculation chart</a></li>
<li>  
<a href=""> hit count > </a>
<img src='http://www.hit-counts.com/counter.php?t=MTM3MzQ3MQ==' border='0' alt='Web Counter'><BR>

 </li>
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
			<h2><strong>Sign Up</strong></h2>
    		<p>Signup to check your return on investment</p>
    		
    		<div class="row">
    			<form action="" method="post" name="signup">
    				<table cellspacing="10" cellpadding="5">
						<tr><td>Name: </td><td><input type="text" name="name" placeholder="Enter your name"></td></tr>
						<tr><td>E-mail:</td><td> <input type="text" name="email" placeholder="Enter your Email ID"></td></tr>
						<tr><td>Password: </td><td><input type="password" name="pwd" placeholder="Enter your Password"></td></tr>
						<tr><td>Verify Password:</td><td> <input type="password" name="vpwd" placeholder="Enter similar password"></td></tr>
						<tr><td>Gender:</td>
						<td><input type="radio" id="gender1" name="gender" value="female">Female
							<input type="radio" id="gender2" name="gender" value="male">Male
						</td></tr>
						<tr><td><input type="submit" value="submit" name="submit"></td></tr>
					</table>
				</form>
				</div>
				</div>
				<div style="width:60%; float: right;"><br><iframe width="560" height="315" src="https://www.youtube.com/embed/eCMP3hW02dI" frameborder="0" allowfullscreen></iframe><br></div>
		</div>
	</div>
	<?php
		if(isset($_POST['submit']))
		{
			mysql_connect("localhost","psomayan","ps7439");
			mysql_select_db("psomayan");
			$name = $_POST['name'];
			$email = $_POST['email'];
			$pwd = $_POST['pwd'];
			$vpwd = $_POST['vpwd'];
			$gender = $_POST['gender'];
			$rand_code = rand(500000,6000000);
			$to      = $email;
			$subject = 'Code for activating your Account';
			$message = "Hello ".$name.", Your activation code is ".$rand_code." Please log in through the link provided below.		http://weblab.cs.uml.edu/~psomayan/91513f2015/hw11/activation.php";
			$headers = 'From: pranayponnappa@gmail.com' . "\r\n" .
   			'Reply-To: pranayponnappa@gmail.com' . "\r\n" .
   			'X-Mailer: PHP/' . phpversion();
			if(mail($to, $subject, $message, $headers))	
			{
				if($pwd == $vpwd)	
				{
					$sql = "insert into sigin (name,email,password,gender,code) values('$name','$email','$pwd','$gender','$rand_code')";	
					$res = mysql_query($sql);
					if($res)
						header("location:activation.php");
   				}
			}
			else
				echo "Unable to verify the Email";
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