<?php
require_once(__DIR__ . '/poker.php');
require_once(__DIR__ . '/hand.php');

$myhand = new \MyApp\Hand();
$cards = $myhand->getHand();

$poker = new \MyApp\Poker();
$result = $poker->getYaku($cards);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Poker</title>
    <link rel="stylesheet" href="">
</head>
<style>
    body {
    background: green;
    }
    .cards {
        float: left;
    }
    .cards-field {
        overflow: hidden;
    }
</style>
<body>
    <figure class="trump">
    <?php foreach ($cards as $card): ?>
        <img src="http://poker.host/image_trump/gif/<?php echo $card['mark'].'_'.$card['number'].".gif"; ?>" width="50" height="50">
        <figcaption><?php echo $card['number']. $card['mark']; ?></figcaption>
    <?php endforeach; ?>
    </figure>
    <div class="result">
        <p>役は<?= $result ?>です</p>
    </div>
</body>
</html>