<?php

$cars_i_want = [];

$cars_i_want[] = 'Aston Martin';
$cars_i_want[] = 'Bugatti';
$cars_i_want[] = 'Ferrari';
$cars_i_want[] = 'Lamborghini';
$cars_i_want[] = 'Maserati';
$cars_i_want[] = 'Mercedes';
$cars_i_want[] = 'Porsche';
$cars_i_want[] = 'Skoda';


var_dump($cars_i_want);

?>
For myself I would buy <?= $cars_i_want[1] ?>.<br>
For my spouse I would buy <?= $cars_i_want[3] ?>.<br>

<?php

$cars_i_want[4] = 'Smart';

?>
Each of my kids will get a <?= $cars_i_want[4]; ?>.<br>

<ul>
    <?php foreach ($cars_i_want as $car_brand) : ?>

        <li>
            <?= $car_brand ?>
        </li>

    <?php endforeach; ?>
</ul>

<?php

$car_prices = [
    'Skoda Octavia' => 270000,
    'Volkswagen Golf' => 170000,
    'BMW X6' => 380000,
    'Porsche 911' => 1150000
];

?>

You can have a Porsche for just <?= $car_prices['Porsche 911'] ?> CZK.<br>

<?php foreach ($car_prices as $model => $price) : ?>
    The price of <?= $model ?> is <?= $price ?> CZK.<br>
<?php endforeach; ?>