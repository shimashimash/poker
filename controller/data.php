<?php
namespace MyApp;

require_once('hand.php');

$trump = new \MyApp\Hand();
list($myhands, $cphands) = $trump->getHand();

$poker = new \MyApp\Poker();
list($rank, $myResult) = $poker->getYaku($myhands);
list($cpRank, $cpResult) = $poker->getYaku($cphands);

// 勝敗判定
$syouhai = $myResult < $cpResult ? 'あなたの勝ちです' : ($myResult === $cpResult ? '引き分けです' : 'あなたの負けです');
