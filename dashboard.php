<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
    path {
    	stroke: brown;
    	stroke-width: 5;
    	fill: none;
  	}
  	line {
    	stroke: black;
  	}
  	text {
    	font-family: Arial;
    	font-size: 9pt;
    }
    </style>
		<title>Solar ROI Dashboard</title>
		<script src = "./jQuery.js"></script>
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  		<link rel="stylesheet" href="./bootstrap.css">
		<link rel="stylesheet" href="./shift.css">
  		<link rel="stylesheet" href="./main.css">
  	</head>
  	<body>
		<div class="nav">
    		<div class="container">
        		<ul class="pull-left">
        			<li><strong>Solar ROI Calculator<strong></li>
        		</ul>
        		<ul class="pull-right">
        			<li><a href="./index.html">Home</a></li>
        			<li><a href="./signup.php">Sign Up</a></li>
        			<li><a href="./login.php">Log Out</a></li>
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
  <div class="div1">
    <div class="panel-setup">
        <div class="container">
        <div style="width:40%;float:left;">
			<h2><strong>Dashboard</strong></h2>
    		<p>Enter the monthly electricity details </p>
    		<div class="row">
    			
			    	<form action="grap/examples/line-labels/index.php" method="post" name="Solarform" class="roiform">
      		
      					<!--Type in your code here-->
      					
						<table> 
						<tr><td>Average monthly consumption</td><td> <input type="text" name="avg" placeholder="Avg. electricity consumed"></td></tr>
						<tr><td>Cost per KWh </td><td> <input type="text" name="rate" placeholder="Enter the cost per kWh"></td></tr>
						<tr><td>State</td>
						<td><select name="zipcode">
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
					</td></tr>
					<tr><td>Number of pannel to be installed &nbsp;</td><td>
					<select name="nofp">
						<option value="1">- 1 -</option>
						<option value="2"> 2</option>
						<option value="3"> 3</option>
					</select></td></tr>
					<tr><td><input type="submit" name="submit" value="submit"></td></tr>
			      </table>
      			</form>
  				</div>
  				</div>
  				<div style="width:50%; float: right;" id = "Solar1">
  					<br><br><div style="width: 261px;"><iframe style="display: block;" src="http://cdnres.willyweather.com/widget/loadView.html?id=31834" width="261" height="228" frameborder="0" scrolling="no"></iframe><a style="text-indent: -9999em;display: block;margin: -20px 0 0 0;height: 20px;position: relative;z-index: 1" href="http://www.willyweather.com/ma/middlesex-county/lowell.html">wheather forecast</a></div><br><br>
  				</div>
  			</div>
  		</div>
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