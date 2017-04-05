<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Shop</title>
</head>
<body>
    <h1>Welcome to My Shop</h1>
    <ul>
        <?php
            $json = file_get_contents('http://product-service');
            $obj = json_decode($json);

            $products = $obj->products;
            foreach ($products as $product) {
                echo "<li>$product</li>";
            }
        ?>
    </ul>
</body>
</html>