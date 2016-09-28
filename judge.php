<?php
ini_set("display_errors", 1);
require_once(__DIR__ . '/controller/function.php');
require_once(__DIR__ . '/controller/data2.php');
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
    <script src="js/poker.js"></script>
</head>
<body>
    <div class="cards-field">
        <div><p>You</p></div>
        <?php foreach ($trumps as $trump): ?>
            <img src="./image_trump/gif/<?= h($trump); ?>" class="trump-img" alt="あなたの手札">
        <?php endforeach ?>
        <p>あなたの役は<?= h($rank); ?>です</p>
    </div>
    <ul class="field">
        <li class="kitty-field">
            <img src="./image_trump/gif/z02.gif" class="kitty" alt="山札">
            <div class="mask">
                <div class="caption">One more !</div>
            </div>
        </li>
        <li class="judge"><?= h($judge) ?></li>
    </ul>
    <div class="cards-field">
        <p>相手の役は<?= h($cpRank); ?>です</p>
        <?php foreach ($cphands as $cphand): ?>
            <img src="./image_trump/gif/<?= h($cphand['mark'])."_".h($cphand['number']).".gif"; ?>" class="trump-img" alt="相手の手札">
        <?php endforeach; ?>
        <div><p>Computer</p></div>
    </div>
</body>
</html>