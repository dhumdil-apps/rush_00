<div class="login">
	<form id="form" class="form layout-center" class="layout-column" method="POST" action="index.php">

		<input id="url" class="hidden" type="text" name="url" value="login">
		<div class="space"></div>

		<div class="layout-row input <?php echo (isset($login_errors['email'])) ? 'invalid-input' : '';  ?>">
			<div class="flex"></div>
			<label for="email">Email:</label>
			<input id="email" type="email" name="email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : ''; ?>" required autofocus>
		</div>

		<?php if (isset($login_errors['email'])) { ?>
			<div class="layout-row input err">
				<div class="flex"></div>
				<span><?php echo $login_errors['email']; ?></span>
			</div>
		<?php } ?>

		<div class="layout-row input <?php echo (isset($login_errors['password'])) ? 'invalid-input' : '';  ?>">
			<div class="flex"></div>
			<label for="password">Password:</label>
			<input id="password" class="password" type="password" name="password" required>
		</div>

		<?php if (isset($login_errors['password'])) { ?>
			<div class="layout-row input err">
				<div class="flex"></div>
				<span><?php echo $login_errors['password']; ?></span>
			</div>
		<?php } ?>

		<div class="layout-row">
			<div class="flex"></div>
			<button class="btn submit">
				<span>Login</span>
			</button>
		</div>

		<div class="layout-row input txt">
			<div class="flex"></div>
			<div class="layout-center" onclick="submitForm(event, 'mouse', 'register')">
				<span>Register</span>
			</div>
		</div>

	</form>
</div>
