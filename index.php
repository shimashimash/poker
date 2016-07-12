<?php
require_once(__DIR__ . '/poker.php');
require_once(__DIR__ . '/hand.php');

$myhand = new \MyApp\Hand();
$cards = $myhand->getHand();

$poker = new \MyApp\Poker();
$rank = $poker->getYaku($cards);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Poker</title>
    <link rel="stylesheet" href="css/poker.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/something.js"></script>
</head>
<body>
    <div class="cards-field">
        <?php foreach ($cards as $card): ?>
        <img src="http://localhost:8888/poker/image_trump/gif/<?php echo $card['mark'].'_'.$card['number'].".gif"; ?>" class="trump-img">
        <?php endforeach; ?>
    </div>
    <div class="rank">
        <p>役は<?= $rank ?>です</p>
    </div>
    <div class="onemore-btn">
        <button class="onemore">もういっかい！</button>
    </div>
</body>
</html>