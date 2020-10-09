<?php

// display-form.php?action=create
// display-form.php?action=edit&puppy_id=1

// is this creating a new puppy or editing and existing puppy
if (isset($_GET['puppy_id'])) {
    // this is editing a puppy with id $_GET['puppy_id']
} else {
    // this is creating a new puppy

    // prepare empty data
    $puppy = [
        'name' => null,
        'breed' => null,
        'cuteness' => 9
    ];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The form</title>
</head>
<body>

    <header>
        <nav>

            <a href="display-form.php">Create a new puppy</a>    
            <a href="display-form.php?puppy_id=1">Edit puppy 1</a>    
            <a href="display-form.php?puppy_id=2">Edit puppy 2</a>    
        
        </nav>
    </header>

    <form action="handle-form.php" method="post">
    
        <label for="">
            Puppy name:<br>
            <input type="text" name="name" value="<?= $puppy['name'] ?>">
        </label>
        <br><br>

        <label for="">
            Breed:<br>
            <input type="text" name="breed" value="<?= $puppy['breed'] ?>">
        </label>
        <br><br>

        <label for="">
            Cuteness level:<br>
            <select name="cuteness" id="">
                <option value="9" <?= $puppy['cuteness'] == 9 ? 'selected' : '' ?>>9</option>
                <option value="10" <?= $puppy['cuteness'] == 10 ? 'selected' : '' ?>>10</option>
            </select>
        </label>
        <br><br>

        <!-- <input type="submit" value="Save"> -->
        <button>Save</button>
    
    </form>
    
</body>
</html>