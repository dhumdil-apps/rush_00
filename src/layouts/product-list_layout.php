<?php
    require('./src/php/db_connect.php');

    if(array_key_exists("pid", $_GET)){
        // $product = mysqli_real_escape_string($link, $email);
        // $sql = "SELECT name FROM categories";
        // $result = mysqli_fetch_all(sqlQuery($sql))[0];
        // echo"<pre>";
        // var_dump($result);
        // echo "</pre>";

        // $pId = $_GET['pid'];
        // $pName = $result[1];
        // $pCatId = $result[2];
        // $pStock = $result[3];
        // $pPrice = $result[4];
        // $pDescription = $result[5];
        // $pImg = $result[6];
        
        // $productId = "...";

    }
?>


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
