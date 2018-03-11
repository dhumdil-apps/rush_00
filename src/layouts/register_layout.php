<div class="login">
	<form id="form" class="form layout-center" class="layout-column" method="POST" action="index.php">

		<input id="url" class="hidden" type="text" name="url" value="register">

		<div class="layout-row input <?php echo (isset($register_errors['name'])) ? 'invalid-input' : '';  ?>">
			<div class="flex"></div>
			<label for="name">Name:</label>
			<input id="name" type="text" name="name" value="<?php echo (isset($_SESSION['name'])) ? $_SESSION['name'] : ''; ?>" required autofocus>
		</div>

		<?php if (isset($register_errors['name'])) { ?>
			<div class="layout-row input err">
				<div class="flex"></div>
				<span><?php echo $register_errors['name']; ?></span>
			</div>
		<?php } ?>

		<div class="layout-row input <?php echo (isset($register_errors['address'])) ? 'invalid-input' : '';  ?>">
			<div class="flex"></div>
			<label for="address">Address:</label>
			<input id="address" type="text" name="address" value="<?php echo (isset($_SESSION['address'])) ? $_SESSION['address'] : ''; ?>" required autofocus>
		</div>

		<?php if (isset($register_errors['address'])) { ?>
			<div class="layout-row input err">
				<div class="flex"></div>
				<span><?php echo $register_errors['address']; ?></span>
			</div>
		<?php } ?>

		<div class="layout-row input <?php echo (isset($register_errors['phone'])) ? 'invalid-input' : '';  ?>">
			<div class="flex"></div>
			<label for="phone">Phone:</label>
			<input id="phone" type="text" name="phone" value="<?php echo (isset($_SESSION['phone'])) ? $_SESSION['phone'] : ''; ?>" required autofocus>
		</div>

		<?php if (isset($register_errors['phone'])) { ?>
			<div class="layout-row input err">
				<div class="flex"></div>
				<span><?php echo $register_errors['phone']; ?></span>
			</div>
		<?php } ?>

		<div class="layout-row input <?php echo (isset($register_errors['email'])) ? 'invalid-input' : '';  ?>">
			<div class="flex"></div>
			<label for="email">Email:</label>
			<input id="email" type="email" name="email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : ''; ?>" required autofocus>
		</div>

		<?php if (isset($register_errors['email'])) { ?>
			<div class="layout-row input err">
				<div class="flex"></div>
				<span><?php echo $register_errors['email']; ?></span>
			</div>
		<?php } ?>

		<div class="layout-row input <?php echo (isset($register_errors['password'])) ? 'invalid-input' : '';  ?>">
			<div class="flex"></div>
			<label for="password">Password:</label>
			<input id="password" class="password" type="password" name="password" required>
		</div>

		<?php if (isset($register_errors['password'])) { ?>
			<div class="layout-row input err">
				<div class="flex"></div>
				<span><?php echo $register_errors['password']; ?></span>
			</div>
		<?php } ?>

		<div class="layout-row">
			<div class="flex"></div>
			<button class="btn submit">
				<span>Register</span>
			</button>
		</div>

	</form>
</div>
