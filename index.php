<?php
ini_set("display_errors", 1);
require_once(__DIR__ . '/poker.php');
require_once(__DIR__ . '/hand.php');

$hand = new \MyApp\Hand();
$cards = $hand->getHand();

$poker = new \MyApp\Poker();
$rank = $poker->getYaku($cards);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Poker</title>
    <link rel="stylesheet" href="css/reset.css">
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
    <div class="field-parent">
        <div class="field-child"><img src="http://localhost:8888/poker/image_trump/gif/z02.gif" class="yamafuda"></div>
        <div class="field-child"><button class="reload-btn">もういっかい！</button><div>
    </div>
<!--     <div class="cp-field">
        <div class="box"><img src="http://localhost:8888/poker/image_trump/gif/z02.gif" class="yamafuda"></div>
        <div class="box"><img src="http://localhost:8888/poker/image_trump/gif/z02.gif" class="yamafuda"></div>
        <div class="box"><img src="http://localhost:8888/poker/image_trump/gif/z02.gif" class="yamafuda"></div>
        <div class="box"><img src="http://localhost:8888/poker/image_trump/gif/z02.gif" class="yamafuda"></div>
        <div class="box"><img src="http://localhost:8888/poker/image_trump/gif/z02.gif" class="yamafuda"></div>
    </div> -->
</body>
</html>