<?php
ini_set("display_errors", 1);
require_once(__DIR__ . '/poker.php');
require_once(__DIR__ . '/hand.php');
require_once(__DIR__ . '/function.php');

$trump = new \MyApp\Hand();
list($myhands, $cphands) = $trump->getHand();

$poker = new \MyApp\Poker();
list($rank, $myResult) = $poker->getYaku($myhands);
list($cpRank, $cpResult) = $poker->getYaku($cphands);

$syouhai = $myResult < $cpResult ? 'あなたの勝ちです' : ($myResult === $cpResult ? '引き分けです' : 'あなたの負けです');

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
        <div><p>You</p></div>
        <?php foreach ($myhands as $myhand): ?>
            <img src="http://poker.host/image_trump/gif/<?= h($myhand['mark']).'_'.h($myhand['number']).".gif"; ?>" class="trump-img" alt="あなたの手札">
        <?php endforeach; ?>
        <p>あなたの役は<?= h($rank); ?>です</p>
    </div>
    <ul class="field">
        <li class="yamafuda-field">
            <img src="http://localhost:8888/poker/image_trump/gif/z02.gif" class="yamafuda" alt="山札">
            <div class="mask">
                <div class="caption">One more !</div>
            </div>
        </li>
        <li class="syouhai"><?= $syouhai; ?></li>
    </ul>
    <div class="cards-field">
        <p><?= h($cpRank); ?></p>
        <?php foreach ($cphands as $cphand): ?>
            <img src="http://localhost:8888/poker/image_trump/gif/<?= h($cphand['mark']).'_'.h($cphand['number']).".gif"; ?>" class="trump-img" alt="相手の手札">
        <?php endforeach; ?>
        <div><p>Computer</p></div>
    </div>
</body>
</html>