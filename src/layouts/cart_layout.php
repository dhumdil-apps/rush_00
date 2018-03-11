<form class ="main-container layout-center" id="form" method="GET" action="index.php">
    <h1 class="title">CART</h1>
	<input id="url" class="hidden" type="text" name="url" value="">
	<input id="id" class="hidden" type="text" name="category" value="">

	<div class="items layout-column">
		<div class="item layout-row" onclick="submitForm(event, 'mouse', 'products', 'category1')">
			<span class="layout-center">PROD 1</span><span class="price" value="%money%">money</span>
		</div>
		<div class="item layout-row" onclick="submitForm(event, 'mouse', 'products', 'category1')">
			<span class="layout-center">PROD 1</span><span class="price" value="%money%">money</span>
		</div><div class="item layout-row" onclick="submitForm(event, 'mouse', 'products', 'category1')">
			<span class="layout-center">PROD 1</span><span class="price" value="%money%">money</span>
		</div><div class="item layout-row" onclick="submitForm(event, 'mouse', 'products', 'category1')">
			<span class="layout-center">PROD 1</span><span class="price" value="%money%">money</span>
		</div><div class="item layout-row" onclick="submitForm(event, 'mouse', 'products', 'category1')">
			<span class="layout-center">PROD 1</span><span class="price" value="%money%">money</span>
		</div><div class="item layout-row" onclick="submitForm(event, 'mouse', 'products', 'category1')">
			<span class="layout-center">PROD 1</span><span class="price" value="%money%">money</span>
		</div>
	
	</div>
</form>