<?php

date_default_timezone_set("US/Eastern");
$date = date("l F d Y");
$today = date("l");
$month = date("F");
$hour = date("g");
$minutes = date("i a");
$time = "<strong>$hour". ":"."$minutes</strong>";

if($today == "Monday"){
	$message =  "Sorry we're closed mondays ";
}elseif($month == "July"){
	$message = "We are on our summer schedule ";
}elseif($month == "August"){
	$message = "We are on our summer schedule we open at 10 am and close at 7pm ";
}else{
	$message ="$date we open at 10am and close at 6pm ";
}






?>



<!DOCTYPE html>
<html>
<head>
	<title>Business Hours</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="businessHours.css">
    
</head>
<body>
	<header>
			<h1>Business Hours</h1>
		</header>

	<div class="container">
		<p><?php echo $message, $time; ?></p>
		<h2>Store Hours</h2>
		
		<table style="width:100%" class="table-striped">
			<tr>
				<th>Days</th>
				<th>Open</th>
				<th>Close</th>
			</tr>
			<tr>
				<td>Sunday</td>
				<td>9 am</td>
				<td>9 pm</td>
			</tr>
			<tr>
				<td>Monday</td>
				<td><strong>Closed</strong></td>
				<td><strong>Closed</strong></td>
			</tr>
			<tr>
				<td>Tuesday</td>
				<td>10 am</td>
				<td>6 pm</td>
			</tr>
			<tr>
				<td>Wednesday</td>
				<td>10 am</td>
				<td>6 pm</td>
			</tr>
			<tr>
				<td>Thursday</td>
				<td>10 am</td>
				<td>6 pm</td>
			</tr>
			<tr>
				<td>Friday</td>
				<td>10 am</td>
				<td>6 pm</td>
			</tr>
			<tr>
				<td>Saturday</td>
				<td>10 am</td>
				<td>6 pm</td>
			</tr>
		</table>

		<hr>
		<h2>Summer Hours</h2>

		
		<table style="width:100%" class="table-striped">
			<tr>
				<th>Days</th>
				<th>Open</th>
				<th>Close</th>
			</tr>
			<tr>
				<td>Sunday</td>
				<td>9 am</td>
				<td>9 pm</td>
			</tr>
			<tr>
				<td>Monday</td>
				<td><strong>Closed</strong></td>
				<td><strong>Closed</strong></td>
			</tr>
			<tr>
				<td>Tuesday</td>
				<td>10 am</td>
				<td>7 pm</td>
			</tr>
			<tr>
				<td>Wednesday</td>
				<td>10 am</td>
				<td>7 pm</td>
			</tr>
			<tr>
				<td>Thursday</td>
				<td>10 am</td>
				<td>7 pm</td>
			</tr>
			<tr>
				<td>Friday</td>
				<td>10 am</td>
				<td>7 pm</td>
			</tr>
			<tr>
				<td>Saturday</td>
				<td>10 am</td>
				<td>7 pm</td>
			</tr>
		</table>
	</div>

	<footer>
		
	</footer>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>