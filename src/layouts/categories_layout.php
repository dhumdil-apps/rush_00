<form id="form" method="GET" action="index.php">

	<input id="url" class="hidden" type="text" name="url" value="">
	<input id="id" class="hidden" type="text" name="category" value="">

	<div>
		<div onclick="submitForm(event, 'mouse', 'products', 'category1')">
			<h1>CATEGORY 1</h1>
		</div>
		<div onclick="submitForm(event, 'mouse', 'products', 'category2')">
			<h1>CATEGORY 2</h1>
		</div>
		<div onclick="submitForm(event, 'mouse', 'products', 'category3')">
			<h1>CATEGORY 3</h1>
		</div>
		<div onclick="submitForm(event, 'mouse', 'products', 'category4')">
			<h1>CATEGORY 4</h1>
		</div>
	</div>
</form>
