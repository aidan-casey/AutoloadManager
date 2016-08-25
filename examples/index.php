<?php

/**
 * Example document for AutoloadManager.
 * @author Aidan Casey <aidan@caseyhouse.net>
 */

require __DIR__ . '/../AutoloadManager.php';

$al = new AutoloadManager();

// This will work for our namespaced CoolLib classes
$al->registerPath( __DIR__ . '/classes/' );

// This will work for our non-namespaced CalcLib classes
$al->registerPath( __DIR__ . '/classes/CalcLib/', 'class.' );

// Run the autoloader
$al->run();

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Demo Page</title>

		<style>

			html, body {
				margin: 0;
				padding: 0;
				background-color: #F5F5F5;
				text-align: center;
			}

			table {
				width: 80%;
				margin: 0 auto;
			}

			th, td {
				padding: 10px;
				border: 1px solid black;
			}

		</style>
	</head>

	<body>

		<h1>May the demos begin!</h1><hr>

		<table>
			<tr>
				<th>Calculator Demo</th>
				<th>Coolify Demo</th>
			</tr>

			<tr>
				<td>
					<?php
						$calc = new Calculator();
						echo $calc->add(3,6); 
					?>
				</td>

				<td>
					<?php
						$coolify = new CoolLib\Coolify();
						echo $coolify->parse('This is some demo text. B-)'); 
					?>
				</td>
			</tr>
		</table>

	</body>

</html>