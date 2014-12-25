<?php

$path = $_SERVER["DOCUMENT_ROOT"].$_SERVER["REQUEST_URI"];

?><!DOCTYPE html>
<html>
	<head>
	
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" />
		<style><?php echo file_get_contents("css/bootstrap.min.css"); ?></style>
		<style><?php echo file_get_contents("css/bootstrap-responsive.min.css"); ?></style>
		<style><?php echo file_get_contents("css/style.css"); ?></style>

	</head>
	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="/"><?php echo $_SERVER['HTTP_HOST']; ?></a>
				</div>
			</div>
		</div>

		<div class="container">

			<table id="files" class="table table-hover">
				<tr><td><strong>Filename</strong></td></tr>
				<tbody><?php echo "\n";

					$files = glob($path . "*");

					foreach($files as $file) {

						$temp = explode("/", $file);
						$file = $temp[count($temp) - 1];

						echo "				";
						echo "<tr>" . "<td>";
						echo "<a href='" . $file . "'>" . $file . "</a>";
						echo "</td>" . "</tr>\n";
					}
				?>
			</table>

		</div>

		<div id="footer">
			<a href="https://github.com/montyanderson/bootstrap-file-browser">bootstrap-file-browser</a> made by 
			<a href="http://montyanderson.net/">Monty Anderson</a>.
		</div>

	</body>
</html>