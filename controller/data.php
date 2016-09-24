<?php
namespace MyApp;

require_once('deal.php');
require_once('poker.php');

$deal = new \MyApp\Deal();
$trump   = $deal->getTrump();
$myhands = $deal->getHand($trump);
$cphands = $deal->getCphand($trump);
$kitty   = $deal->getkitty($trump);

$poker = new \MyApp\Poker();
list($rank, $myResult) = $poker->getYaku($myhands);
list($cpRank, $cpResult) = $poker->getYaku($cphands);

// 勝敗判定
$judge = $myResult < $cpResult ? 'あなたの勝ちです' : ($myResult === $cpResult ? '引き分けです' : 'あなたの負けです');
