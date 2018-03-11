<?php require('./src/php/init.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- META TAGS -->
	<?php require('./src/includes/meta_tags.php'); ?>

	<title>ft_minishop</title>

	<!-- Styles -->
	<?php require('./src/includes/links.php'); ?>

</head>
<body>
	<div class="page">

		<?php require('./src/layouts/header_layout.php'); ?>

		<div class="main">
			<?php require($layout); ?>
		</div>

		<?php require('./src/layouts/footer_layout.php'); ?>

    </div>

	<!-- Scripts -->
	<?php require('./src/includes/scripts.php'); ?>
</body>
</html>
