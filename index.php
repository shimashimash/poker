<?php
ini_set("display_errors", 1);
require_once(__DIR__ . '/poker.php');
require_once(__DIR__ . '/hand.php');

$trump = new \MyApp\Hand();
$yamafuda = $trump->getHand();
$myhands = array_slice($yamafuda, 0, 5);
$cphands = array_slice($yamafuda, 6, 5);

$poker = new \MyApp\Poker();
list($rank, $myResult) = $poker->getYaku($myhands);
list($cpRank, $cpResult) = $poker->getYaku($cphands);

$syouhai = $myResult < $cpResult ? 'あなたの勝ちです' : ($myResult === $cpResult ? '引き分けです' : 'あなたの負けです');

function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
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
        <?php foreach ($myhands as $myhand): ?>
            <img src="http://localhost:8888/poker/image_trump/gif/<?= h($myhand['mark']).'_'.h($myhand['number']).".gif"; ?>" class="trump-img">
        <?php endforeach; ?>
    </div>
    <div class="rank">
        <p>↑役は<?= h($rank); ?>です</p>
        <p>↓役は<?= h($cpRank); ?>です</p>
        <p><?= $syouhai; ?></p>
    </div>
    <div class="cards-field">
        <?php foreach ($cphands as $cphand): ?>
            <img src="http://localhost:8888/poker/image_trump/gif/<?= h($cphand['mark']).'_'.h($cphand['number']).".gif"; ?>" class="trump-img">
        <?php endforeach; ?>
    </div>
    <div class="field-parent">
        <div class="field-child"><img src="http://localhost:8888/poker/image_trump/gif/z02.gif" class="yamafuda"></div>
        <div class="field-child"><button class="reload-btn">もういっかい！</button><div>
    </div>
</body>
</html>