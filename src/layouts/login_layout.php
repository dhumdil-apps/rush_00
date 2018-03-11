<div class="login">
	<form id="form" class="form layout-center" class="layout-column" method="POST" action="index.php">

		<input id="url" class="hidden" type="text" name="url" value="login">
		<div class="space"></div>

		<div class="layout-row input <?php echo (isset($errors['email'])) ? 'invalid-input' : '';  ?>">
			<div class="flex"></div>
			<label for="email">Email:</label>
			<input id="email" type="email" name="email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : ''; ?>" required autofocus>
		</div>

		<?php if (isset($errors['email'])) { ?>
			<div class="layout-row input err">
				<div class="flex"></div>
				<span><?php echo $errors['email'][0]; ?></span>
			</div>
		<?php } ?>

		<div class="layout-row input <?php echo (isset($errors['password'])) ? 'invalid-input' : '';  ?>">
			<div class="flex"></div>
			<label for="password">Password:</label>
			<input id="password" class="password" type="password" name="password" required>
		</div>

		<?php if (isset($errors['password'])) { ?>
			<div class="layout-row input err">
				<div class="flex"></div>
				<span><?php echo $errors['password'][0]; ?></span>
			</div>
		<?php } ?>

		<div class="layout-row">
			<div class="flex"></div>
			<button class="btn submit" type="submit">
				<span>Login</span>
			</button>
		</div>

	</form>
</div>
