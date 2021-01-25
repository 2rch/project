<?php include("header.php"); ?>
<aside>
    <div class="aside">
        <h3>Категории</h3>
        <ul>
            <li><a href="">Casual тремпели</a></li>
            <li><a href="">Дизайнерские тремпели</a></li>
            <li><a href="">Вычурные тремпели</a></li>
            <li><a href="">Тремпель на заказ</a></li>
            <li><a href="">Ещё тремпель</a></li>
        </ul>
    </div>
</aside>
<main>
<?php $product = require("product-db.php");
//var_dump($product);
//foreach($product as $key => $val)

foreach ($product as $key => $value) {
echo "<p>", print_r($product[$key]), "</p>";}?>
</main>
<?php include("footer.php"); ?>
