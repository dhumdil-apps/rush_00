<form id="form" method="GET" action="index.php">

	<input id="url" class="hidden" type="text" name="url" value="">
	<input id="id" class="hidden" type="text" name="category" value="">

	<div>
		<div onclick="submitForm(event, 'mouse', 'product', 'product1')">
			<h1>Product 1</h1>
		</div>
		<div onclick="submitForm(event, 'mouse', 'product', 'product2')">
			<h1>Product 2</h1>
		</div>
		<div onclick="submitForm(event, 'mouse', 'product', 'product3')">
			<h1>Product 3</h1>
		</div>
		<div onclick="submitForm(event, 'mouse', 'product', 'product4')">
			<h1>Product 4</h1>
		</div>
	</div>

</form>
