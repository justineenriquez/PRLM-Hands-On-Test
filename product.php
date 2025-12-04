<?php
    $user = 'Justine';
    $greet = 'Good to see you back';

    if ($user) {
        $greet .=', ' . $user;
    }

    $product = 'Blueberry Cheesecake';
    $cost = 10;
    $pack = 15;
    $totals1 = [];

    for ($i = 1; $i <= 15; $i++) {
        $subtotal = $cost * $pack;
        $discount = ($pack / 100) * 4;
        $totals = $pack + $cost - $discount;
    }

?>
<?php require_once "includes/header.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "css/styles.css">
    <title>Document</title>
</head>
<body>
    <h1><?= $greet?></h1>
    <h2>BLUEBERRY CHEESECAKE DISCOUNT</h2>

    <table>
        <tr>
            <th>Packs</th>
            <th>Price</th>
        </tr>
        <?php foreach($totals1 as $quantity => $price) ?>
        <tr>
            <td><?= $pack; ?></td>
            <td><?= $totals ?></td>
        </tr>

          

</body>
</html>

<?php include "includes/footer.php" ?>



