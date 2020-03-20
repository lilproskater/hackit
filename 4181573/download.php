<?php
	if (isset($_POST['download'])) {
		header("Location: uploaded/surprise_inside.zip");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../src/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../src/js/jquery-3.4.1.js"></script>
	<title>Hackit</title>
</head>
<body>
	<div class="container-fluid">
		<form action="download.php" method="POST">
			<button class="btn btn-success" style="margin-top: 20px;" name="download">DOWNLOAD</button>
		</form>
	</div>
</body>
</html>