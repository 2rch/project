<?php include("header.php");
/**
 * @var $products array
 */
?>
        <div>
            <p>1st</p>
            <p>2nd</p>
        </div>
        <?php foreach ($products as $product):?>
<p><?php echo $product['name'] ?></p>
<?php endforeach; ?>
    </main>
<?php include("footer.php");?>