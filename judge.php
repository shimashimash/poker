<?php
ini_set("display_errors", 1);
require_once(__DIR__ . '/controller/function.php');
require_once(__DIR__ . '/controller/data.php');

$trumps = $change->changeCards();

//数字を抽出
var_dump(preg_replace('/[^0-9]/', '', $trumps));

//文字列を抽出
foreach ($trumps as $trump) {
    $cards['mark'][] = strstr($trump, "_", true);
}
var_dump($cards['mark']);


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
    <?php foreach ($trumps as $trump): ?>
        <img src="/poker/image_trump/gif/<?= h($trump); ?>" class="trump-img" alt="あなたの手札">
    <?php endforeach ?>
</body>
</html>