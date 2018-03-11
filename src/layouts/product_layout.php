<?php
    require('./src/php/db_connect.php');

    if(array_key_exists("pid", $_GET)){
        // $product = mysqli_real_escape_string($link, $email);
        $sql = "SELECT * FROM products WHERE id='".$_GET['pid']."'";
        $result = mysqli_fetch_all(sqlQuery($sql))[0];
        // echo"<pre>";
        // var_dump($result);
        // echo "</pre>";

        $pId = $_GET['pid'];
        $pName = $result[1];
        $pCatId = $result[2];
        $pStock = $result[3];
        $pPrice = $result[4];
        $pDescription = $result[5];
        $pImg = $result[6];
        
        // $productId = "...";

    }
?>

<form id="form" method="GET" action="cart.php">
<div class="produc layout-row">
    <div class="picture">
        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $pImg ).'"/>';   ?>">
    </div>
    <div class="information layout-column">
        <h1 class="product-name"><?php echo($pName); ?></h1>
        <a class="product-description"><?php echo($pDescription); ?></a>
        <div class="product-price">$<?php echo($pPrice); ?></div>
        <input class= "btn" type="number" value="1" min="0"/>
        <div class="btn red" onclick="submitForm(event, 'mouse', 'products', 'category1')"><span>BUY</span></div>
    </div>  
</div>
</form>

