<?php
ini_set("display_errors", 1);
require_once(__DIR__ . '/controller/function.php');
require_once(__DIR__ . '/db.php');

$trumps = $_POST['trumps'];

$pdo = db_connect();
try{
$stmt = $pdo->prepare("INSERT INTO cards (card1, card2, card3, card4, card5) VALUES (:card1, :card2, :card3, :card4,:card5)");

$card1 = h($_POST['hold'][0]);
$card2 = h($_POST['hold'][1]);
$card3 = h($_POST['hold'][2]);
$card4 = h($_POST['hold'][3]);
$card5 = h($_POST['hold'][4]);

$stmt->bindParam(':card1', $card1, PDO::PARAM_STR);
$stmt->bindParam(':card2', $card2, PDO::PARAM_STR);
$stmt->bindParam(':card3', $card3, PDO::PARAM_STR);
$stmt->bindParam(':card4', $card4, PDO::PARAM_STR);
$stmt->bindParam(':card5', $card5, PDO::PARAM_STR);

$stmt->execute();

} catch(PDOException $Exception) {
    die('接続エラー:'.$Exception->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php var_dump($trumps); ?>
</body>
</html>
