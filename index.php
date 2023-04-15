<?php
require_once('lib/qrcode.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>QR Code Generator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="main">
		<center>
			<h1>QR Code Generator</h1>
			<h3>By</h3>
			<a href="https://charotaritsolutions.com" target="_blank">Charotar IT Solutions</a>
		</center>
		<br>
		<center>
			<form action="" method="post">
				<h3>Enter the data</h3>
				<input type="text" name="data" placeholder="Ex: www.charotaritsolutions.com" required>
				<button type="submit">Submit</button>
			</form>
		</center>
		<br>
		<center>
			<h2>QR Code</h2>
			<div id="qrImg">
				<?php
				if (isset($base64ImageData) && !empty($base64ImageData)) {
					echo '<img src="data:image/png;base64,' . $base64ImageData . '" alt="QR Code">';
				}
				else {
					var_dump($base64ImageData);
				}
				?>
			</div>
		</center>
		<br>
		<center>
			Support & Follow Charotar IT Solutions
		</center>
	</div>
</body>
</html>
