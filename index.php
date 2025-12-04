<?php
    $user = 'Justine';
    $pagbati = "Hello, " .  $user;

    $offer = [
        'item' => 'Blueberry Cheesecake',
        'quantity' => 2,
        'normal_price' => 200,
        'discounted_price' => 179
    ];

    $reg_price = $offer['quantity'] * $offer['normal_price'];
    $offer_price = $offer['quantity'] * $offer['discounted_price'];
    $saving = $offer_price - $reg_price;
?>

<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1><?= $pagbati ?></h1>

    <p>Buy now <?= $offer['quantity']; ?> promo of our <?= $offer['item']; ?> </p>
    <p>Now, with the discounted price of <?= $offer_price; ?></p>
    <p>With the original price of <?= $reg_price; ?></p>
</body>
</html>


<?php include 'includes/footer.php'; ?>