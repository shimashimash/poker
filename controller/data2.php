<?php
namespace MyApp;

require_once('deal.php');
require_once('poker.php');
require_once('change.php');

$deal = new \MyApp\Deal();
$deal->sessionStart(); //セッション再スタート

$change = new \MyApp\Change();
list($kitty, $cphands, $cpRank, $cpResult) = $change->getSession(); //セッションの値受け取る
$trumps = $change->changeCards($kitty); //postされたカードを替える
$changeHands = $change->convertCards($trumps); //画像表示できるように変換

$poker    = new \MyApp\Poker();
$rank     = $poker->getYaku($changeHands); //自分の役
$myResult = $poker->getJudge($changeHands); //自分の役の値

$judge = $myResult < $cpResult ? 'あなたの勝ちです' : ($myResult === $cpResult ? '引き分けです' : 'あなたの負けです'); //勝敗判定