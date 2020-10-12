<h1>Here is the form</h1>

<form action="" method="post">

    <!-- 20. -->
    <?php foreach ($items as $i => $text) : ?>

        <input type="text" value="<?= htmlspecialchars($text) ?>" name="items[<?= $i ?>]">    

    <?php endforeach; ?>

    <input type="text" value="" name="items[<?= count($items) ?>]" placeholder="new item">

    <button>Add</button>

</form>