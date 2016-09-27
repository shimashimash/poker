<?php
namespace MyApp;

require_once('deal.php');
require_once('poker.php');
require_once('change.php');
require_once('data.php');

$change = new \MyApp\Change();
$trumps = $change->changeCards();
$changeHands = $change->convertCards($trumps);
$change->getSession($cphands);

$poker    = new \MyApp\Poker();
$rank     = $poker->getYaku($changeHands); //自分の役
$myResult = $poker->getJudge($changeHands); //自分の役の値

// 勝敗判定
$judge = $myResult < $cpResult ? 'あなたの勝ちです' : ($myResult === $cpResult ? '引き分けです' : 'あなたの負けです');