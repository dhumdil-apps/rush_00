<?php
    require('./src/php/db_connect.php');

        // $product = mysqli_real_escape_string($link, $email);
		$sql = "SELECT id, name FROM categories";
?>

<form class ="main-container layout-center" id="form" method="GET" action="index.php">

	<input id="url" class="hidden" type="text" name="url" value="">
	<input id="id" class="hidden" type="text" name="category" value="">

<?php 
        foreach ($result = mysqli_fetch_all(sqlQuery($sql)) as $row){
?>

	<div class="items layout-column">
		<div class="item layout-row" onclick="submitForm(event, 'mouse', 'products', '<?php echo($row[0]);?>')">
			<span class="layout-center"><?php echo($row[1]);?></span>
		</div>	
	</div>


<?php
		};
?>


</form>