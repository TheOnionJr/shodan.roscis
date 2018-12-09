<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" id="dark-mode" rel="stylesheet" href="/css/main.css">
	<meta charset="UTF-8">
</head>
<body>
	<meta charset="UTF-8">
	<div id="header">
		<div style="max-width:800px;"><a href="/index.php"><img src="/img/white_logo_transparent.png" align="left" ></a></div><br>
	</div>
	<div id="wrapper">
		<?php
			#require_once 'shodan/shodan-api.php';
			require_once 'shodan/Colors.php';
			require_once 'shodan/Shodan.php';
			echo "<br><br><br><br><br><br><br><br>";
			$file = fopen('shodan/api_key.txt','r');
			$key = fgets($file,40);
			fclose ($file);
			$client = new Shodan($key, TRUE);
			$colors = new Colors();
			echo $key;
			echo "<br><br>";
			
			echo $colors->getColoredString('IP SEARCH:', 'black', 'green');
			try {
				htmlentities(var_dump($client->ShodanHostCount(array(
					'query' => 'Hydro', // https://www.facebook.com/
				))));
			} catch (Exception $e) {
				echo $e->getMessage()."\n";
			}
		?>
	</div>
</body>
</html>