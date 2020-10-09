<?php

var_dump($_GET);
var_dump($_POST);

// handle the submission of the form (if it is submitted)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user    = $_POST['user'] ?? null;
    $subject = $_POST['subject'] ?? null;

    // send a message from $user with the subject $subject
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handling POST</title>
</head>
<body>

    <form action="" method="post">
    
        <label for="">
            Username:
            <input type="text" name="user">
        </label>
        <br>

        <label for="">
            Subject:
            <input type="text" name="subject">
        </label>
        <br>

        <input type="submit" value="Submit the form">

    </form>
    
</body>
</html>