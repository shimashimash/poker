<?php
ini_set("display_errors", 1);
require_once(__DIR__ . '/controller/function.php');
require_once(__DIR__ . '/controller/data.php');
require_once(__DIR__ . '/controller/poker.php');

$trumps = $change->changeCards();

//数字を抽出
$numbers = [];
$numbers = preg_replace('/[^0-9]/', '', $trumps);

//文字列を抽出
$marks = [];
foreach ($trumps as $trump) {
    $marks[] = strstr($trump, "_", true);
}

//markとnumberを合体
$myhands1 = [];
for ($i=0; $i < 5; $i++) {
    $myhands1[] = array(
        'number' => (int)$numbers[$i],
        'mark' => $marks[$i]
        );
}

var_dump($myhands1);
//print_r($myhands);

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