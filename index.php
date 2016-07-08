<?php
require_once(__DIR__ . '/poker.php');
require_once(__DIR__ . '/hand.php');

$hand = new \MyApp\Hand();
$cards = $hand->getHand();

$poker = new \MyApp\Poker();
$result = $poker->getYaku($cards);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>poker</title>
    <link rel="stylesheet" href="">
</head>
<style>
    body {
    background: green;
    }
</style>
<body>
    <div>
        <?php foreach ($cards as $card): ?>
                <img src="http://poker.host/image_trump/gif/<?php echo $card['img'].".gif"; ?>">
                <p><?php echo $card['number']. $card['mark']; ?></p>
        <?php endforeach; ?>
    </div>
    <div class="result">
        <p>役は<?= $result ?>です</p>
    </div>
</body>
</html>