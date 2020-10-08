<?php
    // is the current user administrator?
    $user_is_admin = true;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline PHP</title>
</head>
<body>

    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Eshop</a></li>
        <li><a href="#">Contact</a></li>

        <?php if ($user_is_admin) : ?>
            <li><a href="#">Link just for administrators</a></li>
            <li><a href="#">Another link just for administrators</a></li>
        <?php endif; ?>

    </ul>

    <ul>
    
    <?php

        for ($i = 1; $i <= 10; $i++) {
            echo '<li>
                <h2>Item #' . $i . '</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde corporis labore delectus voluptatibus nobis. Eligendi nesciunt commodi est impedit aperiam tenetur laboriosam earum, dignissimos fuga porro veniam numquam, voluptas libero!</p>
            </li>';
        }

    ?>
        
    </ul>
    
</body>
</html>