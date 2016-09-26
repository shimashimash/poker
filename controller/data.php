<?php
require_once('deal.php');
require_once('poker.php');

$deal = new MyApp\Deal();
//$deal->sessionStart();
$trump   = $deal->getTrump();
$myhands = $deal->getHand($trump);
$cphands = $deal->getCphand($trump);
$kitty   = $deal->getkitty($trump);

$poker    = new MyApp\Poker();
$rank     = $poker->getYaku($myhands);
$myResult = $poker->getJudge($myhands);
$cpRank   = $poker->getYaku($cphands);
$cpResult = $poker->getJudge($cphands);

// 勝敗判定
$judge = $myResult < $cpResult ? 'あなたの勝ちです' : ($myResult === $cpResult ? '引き分けです' : 'あなたの負けです');

session_start();
//$_SESSION['kitty'] = $kitty;
$deal->setKitty($kitty);
$_SESSION['cphands'] = $cphands;
$_SESSION['cpRank'] = $cpRank;
$_SESSION['cpResult'] = $cpResult;
