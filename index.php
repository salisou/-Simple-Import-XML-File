<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href = "https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple Import XML File</h3>
		<hr style="border-top:1px dotted #000;" />
		<div class="col-md-4">
			<form method="POST" action="" enctype="multipart/form-data">
				<h5>Upload XML here</h5>
				<input type="file" name="file"/>
				<br />
				<center><button name="import" class="btn btn-primary">Import</button></center>
			</form>
		</div>
		<div class="col-md-8">
			<?php include'import.php'?>
		</div>
	</div>
</body>
</html>