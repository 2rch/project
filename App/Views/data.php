<main>
<?php
$content = require '../App/Database/product-db.php';
echo json_encode($content);
?>
</main>