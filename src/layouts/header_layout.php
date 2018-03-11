<form id="form" method="GET" action="index.php">
	<input id="url" class="hidden" type="text" name="url" value="">

	<div class="header layout-row">
		<div class="title" onclick="submitForm(event, 'mouse', '')">FT_MINISHOP</div>
		<div class="flex"></div>

		<?php if (isset($_SESSION['logged_in'])) { ?>
			<div class="login" onclick="submitForm(event, 'mouse', 'logout')">LOGOUT</div>
		<?php } else { ?>
			<div class="login" onclick="submitForm(event, 'mouse', 'login')">LOGIN</div>
		<?php } ?>

		<div class="cart" onclick="submitForm(event, 'mouse', 'cart')">
			<div>
				<img src="src/img/shopping_cart.svg">
			</div>
		</div>
	</div>

</form>
