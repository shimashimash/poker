<?php
namespace MyApp;

require_once('hand.php');
require_once('change.php');

$trump = new \MyApp\Hand();
list($myhands, $cphands, $kitty) = $trump->getHand();

$poker = new \MyApp\Poker();
list($rank, $myResult) = $poker->getYaku($myhands);
list($cpRank, $cpResult) = $poker->getYaku($cphands);

// $change = new \MyApp\Change();
// $trumps = $change->changeCards();

// 勝敗判定
$syouhai = $myResult < $cpResult ? 'あなたの勝ちです' : ($myResult === $cpResult ? '引き分けです' : 'あなたの負けです');
