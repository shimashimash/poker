<?php
ini_set("display_errors", 1);
require_once(__DIR__ . '/controller/poker.php');
require_once(__DIR__ . '/controller/function.php');
require_once(__DIR__ . '/controller/data.php');

// 山札
session_start();
$kitty = $_SESSION['kitty'];

// 捨てられたカードの値を受け取り、その数をカウントする
if(isset($_POST['bet'])) {
    $results = $_POST['bet'];
    $cntBet = count($results);
}else{
    $cntBet = 0;
}

// 山札から捨てられた枚数分引く
$draws = array_slice($kitty, 0, $cntBet);

// ドローしたものを整形
foreach ($draws as $draw) {
    $drew[] = $draw['mark'].'_'.$draw['number'].".gif";
}

// 自分の手札を受け取る
if(isset($_POST['trumps'])) {
    $trumps = $_POST['trumps'];
}

if (isset($results)) {
    foreach ($results as $key => $value) {
        if (($key = array_keys($trumps, $value)) !== false) {
            foreach($key as $ke){
                $keies[] = $ke;
                //printf($keies);
            }
        }
    }
    for ($i=0; $i<$cntBet; $i++) {
        //printf($drew[$i]);
        $replace = array($keies[$i] => $drew[$i]);
    }
        $trumps = array_replace($trumps, $replace);
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
    <script src="js/poker.js"></script>
</head>
<body>
    <?php foreach ($trumps as $trump): ?>
        <img src="/poker/image_trump/gif/<?= h($trump); ?>" class="trump-img" alt="あなたの手札">
    <?php endforeach; ?>
</body>
</html>