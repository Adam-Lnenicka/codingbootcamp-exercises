<?php

// if (isset($_GET['name'])) {
//     $user_name = $_GET['name'];
// } else {
//     $user_name = 'Guest';
// }

// $user_name = isset($_GET['name']) ? $_GET['name'] : 'Guest';

$user_name = $_GET['name'] ?? 'Guest';
$product_id = $_GET['product_id'] ?? 'ID NOT SET!';

$page = $_GET['page'] ?? '404';

// complex database operations to retrieve
// data about product from database
// using $product_id


var_dump( parse_url($_SERVER['REQUEST_URI']) );

$query_string_data = [
    'product_id' => 12,
    'page' => 'checkout',
    'message' => 'Successfully added to basket'
];

$query_string = http_build_query($query_string_data);

var_dump($query_string);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests in PHP</title>
</head>
<body>

    <h1>Requests in PHP</h1>

    <h2>Hello, <?= $user_name ?></h2>

    <h2>Showing product <?= $product_id ?></h2>

    <nav>
        <a href="?name=Jan&page=product&product_id=123">Product 123</a>
        <a href="?name=Jan&page=product&product_id=456">Product 456</a>
        <a href="?name=Jan&page=product&product_id=789">Product 789</a>
        <a href="?<?= $query_string ?>">Go to checkout</a>

        <a href="?page=home">Home</a>
        <a href="?page=product">Product</a>
        <a href="?page=contact">Contact form</a>
    </nav>

    <?php

        // var_dump($_GET);

        // var_dump($_POST);

    ?>

    <?php if ($page == 'home') : ?>

        Welcome to the homepage!

    <?php elseif ($page == 'product') : ?>

        Take a look at this product!
        <?php // include 'product.php'; ?>
    
    <?php else : ?>

        404: page not found

    <?php endif; ?>
    
</body>
</html>