<?php

	$coordinates = '39.7099,-75.1189';
	
	$api_url = 'https://api.darksky.net/forecast/16ebde69a3c2104de737b3c38d37d8ac/'.$coordinates;
	
	$forecast = json_decode(file_get_contents($api_url));

	echo '<pre>';
	print_r($forecast);
	echo '</pre>';
	
	//$dsn = 'mysql:host=localhost;dbname=my_guitar_shop';
	//$username = 'mgs_user';
	//$password = 'pa55word';
	//create PDO object
	//$db = new PDO($dsn, $username,$password);
	
	
	// Current conditions
	$temperature_current = round($forecast->currently->temperature);
	$summary_current = $forecast->currently->summary;
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Forecast</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
		crossorigin="anonymous">
	</head>
	<body>
		<main class="container text-center">
			<h1 class="display1"Forecast</h1>
			<div class="card" p-4" style="margin: 0 auto; max-width: 320px;">
				<h2>Current Forecast</h2>
				<h3 class="display2"><?php echo $temperature_current; ?>&deg;</h3>
				<p class="lead"><?php echo $summary_current; ?></p>
			</div>
		</main>
	</body>
</html>