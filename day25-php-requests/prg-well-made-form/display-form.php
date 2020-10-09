<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The form</title>
</head>
<body>

    <form action="handle-form.php" method="post">
    
        <label for="">
            Puppy name:<br>
            <input type="text" name="name">
        </label>
        <br><br>

        <label for="">
            Breed:<br>
            <input type="text" name="breed">
        </label>
        <br><br>

        <label for="">
            Cuteness level:<br>
            <select name="cuteness" id="">
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </label>
        <br><br>

        <!-- <input type="submit" value="Save"> -->
        <button>Save</button>
    
    </form>
    
</body>
</html>