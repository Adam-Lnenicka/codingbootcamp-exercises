<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess exercise</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="board">

        <?php for ($y = 1; $y <= 8; $y++) : ?>

            <div class="row">

                <?php for ($x = 1; $x <= 8; $x++) : ?>

                    <div class="<?= $x % 2 == $y % 2 ? 'white' : 'black' ?>">
                        <?php if ($x == 2 && $y == 4) : ?>
                            <img src="https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png" alt="white king">
                        <?php elseif ($x == 7 && $y == 8) : ?>
                            <img src="https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png" alt="white queen">
                        <?php endif; ?>
                    </div>

                <?php endfor; ?>

            </div>

        <?php endfor; ?>

    </div>
    
</body>
</html>