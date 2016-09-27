<?php
require_once('deal.php');
require_once('poker.php');

$deal = new MyApp\Deal();
$trump   = $deal->getTrump(); //トランプ全て
$myhands = $deal->getHand($trump); //自分の手札
$cphands = $deal->getCphand($trump); //相手の手札
$kitty   = $deal->getkitty($trump); //山札

$poker    = new MyApp\Poker();
$rank     = $poker->getYaku($myhands); //自分の役
$myResult = $poker->getJudge($myhands); //自分の役の値
$cpRank   = $poker->getYaku($cphands); //相手の役
$cpResult = $poker->getJudge($cphands); //相手の役の値

$deal->sessionStart(); //セッションスタート
$deal->setSession($kitty, $cphands, $cpRank, $cpResult); //必要な変数をセッションに格納
// 勝敗判定
$judge = $myResult < $cpResult ? 'あなたの勝ちです' : ($myResult === $cpResult ? '引き分けです' : 'あなたの負けです');


//$deal->clearSession();
