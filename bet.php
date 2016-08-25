<?php
ini_set("display_errors", 1);
require_once(__DIR__ . '/controller/poker.php');
require_once(__DIR__ . '/controller/function.php');
require_once(__DIR__ . '/controller/data.php');

if(isset($_POST['bet'])) {
    $results = array();
    $results = $_POST['bet'];
}

if(isset($_POST['trumps'])) {
    $trumps = $_POST['trumps'];
}

foreach ($results as $key => $value) {
    if (($key = array_search($value, $trumps)) != false) {
    unset($trumps[$key]);
    }
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
    <?php var_dump($trumps); ?>
</body>
</html>