<?php

// 3.
$page_title = 'Shopping list';

// 5.
$page = 'home';

// * ?page=form

// 6.
if (isset($_GET['page'])) {
    // 7.
    $page = $_GET['page'];
}

// * $page == 'form'

// 16.
$items = []; // default value of items, default array of
             // shopping list items

// 17.
if (!empty($_POST['items'])) { // $_POST['items'] is set AND it is not empty
// if (isset($_POST['items']) && $_POST['items'] != []) { // same as above
    
    // 18.
    var_dump($_POST);

    // 19.
    $items = $_POST['items'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morning workout</title>


    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
    </style>
</head>
<body>

    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=form">Form</a>
    </nav>

    <!-- 4. -->
    <h1><?= $page_title ?></h1>

    <!-- 8. -->
    <?php if ($page == 'home') : ?>

        <?php include 'home.php'; ?>

    <?php endif; ?>

    <!-- 10. -->
    <?php if ($page == 'form') : ?>

        <?php include 'form.php'; ?>

    <?php endif; ?>
    
</body>
</html>