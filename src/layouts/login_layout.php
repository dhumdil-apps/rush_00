<div class="login">
	<form id="form" class="form layout-center" class="layout-column" method="POST" action="/src/php/login.php">

		<div class="layout-row txt">
			<div class="flex"></div>
			<div class="p">
				<p>Accusantium doloremque laudantium, totam rem aperiam</p>
			</div>
		</div>

		<div class="layout-row input <?php echo (isset($errors['email'])) ? 'invalid-input' : '';  ?>">
			<div class="flex"></div>
			<label for="email">Email:</label>
			<input id="email" type="email" name="email" value="<?php echo (isset($SESSION['email'])) ? $SESSION['email'] : ''; ?>" required autofocus onkeydown="submitForm(event, 'keyboard')">
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
			<input id="password" type="password" name="password" required onkeydown="submitForm(event, 'keyboard')">
		</div>

		<?php if (isset($errors['password'])) { ?>
			<div class="layout-row input err">
				<div class="flex"></div>
				<span><?php echo $errors['password'][0]; ?></span>
			</div>
		<?php } ?>

		<div class="layout-row">
			<div class="flex"></div>
			<div class="btn submit" onclick="submitForm(event, 'mouse')">
				<span>Login</span>
			</div>
		</div>

	</form>
</div>
