<?php
if(isset($_POST['submit']))
{
$avg = $_POST['avg'];
$nofp = $_POST['nofp'];
$rate = $_POST['rate'];
$zipcode = $_POST['zipcode'];
$total = $avg * $rate;
$total  = $total *12;
 

if($nofp == 1)
{
$savings = 10;
}
if($nofp == 2)
{
$savings = 20;
}
if($nofp == 3)
{
$savings = 30;
}

$state_tax = 2.5;
$fed_tax = 3;

if($zipcode == 'CA')
{

$state_tax = 1.8;
$fed_tax = 2.1;
}

if($zipcode == 'MA')
{

$state_tax = 1.5;
$fed_tax = 2.8;
}
$savings = $savings * 12;

$savings = $total - $savings;
$sav_fy = $savings;
for($i=0;$i<13;$i++)
{
$savings_tax = ($savings * $state_tax) / 100;
$savings = $savings - $savings_tax;


$savings_fed = ($savings * $fed_tax) / 100;
$savings = $savings - $savings_fed;
$diff[$i] = $total - $savings;
$diff[$i] = round($diff[$i]);
}
}//if
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Solar ROI Savings graph</title>
<head>

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
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Solar ROI'
        },
        subtitle: {
            text: 'Plotting Solar ROI'
        },
        xAxis: {
            categories: ['2015-16', '2017-18', '2019-20', '2021-22', '2023-24', '2025-26', '2027-28', '2029-30', '2031-32', '2033-34', '2035-36', '2037-38','2039-2040']
        },
        yAxis: {
            title: {
                text: 'Savings ($)'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'With Solar',
            data: [<?php echo $diff['0'];?>,<?php echo $diff['1'];?>,<?php echo $diff['2'];?>,<?php echo $diff['3'];?>,<?php echo $diff['4'];?>,<?php echo $diff['5'];?>,<?php echo $diff['6'];?>,<?php echo $diff['7'];?>,<?php echo $diff['8'];?>,<?php echo $diff['9'];?>,<?php echo $diff['10'];?>,<?php echo $diff['11'];?>,<?php echo $diff['12'];?>]
        }]
    });
});
		</script>
	</head>
	<body bgcolor="gray">
<script src="../../js/highcharts.js"></script>
<script src="../../js/modules/exporting.js"></script>
<div>
<div style="float:left;"></div>
<div id="container" style="width: 100%; height: 400px; margin: 0 auto; float:right;"></div>
<center><h3>The above Graph shows your savings per year </h3>
<?php
echo "<u> The following calculations are done as per the data you had entered</u><br><br>";
echo "Your approx total yearly bill without Solar Panel implementation = $total";
echo "<br> Your approx total yearly bill with Solar Panel implementation for first year = ".$sav_fy;
echo "<br> Tax was considered of $zipcode state";
echo "<br>Savings for first year = ".$diff[0];
    echo "<br>Total Solar Hours for the next 25years is = 111675h:28m:42s";
?>

</div>
	</body>
</html>
