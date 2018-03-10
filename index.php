<?php
	require('./src/php/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Rush00 - PHP Piscine | Academy+Plus">

	<title>Rush00 - PHP Piscine</title>

	<!-- CSS -->
	<?php include "./src/includes/links.php"?>
</head>
<body>
	<div class="page">

		<?php include "./src/layouts/header_layout.php"; ?>

		<!-- TODO: read link and insert corresponding layout -->
		<?php include "./src/layouts/product_layout.php"; ?>
		
		<?php include "./src/layouts/footer_layout.php"; ?>

    </div>

	<!-- JavaScript -->
	<?php include "./src/includes/scripts.php"?>
</body>
</html>
