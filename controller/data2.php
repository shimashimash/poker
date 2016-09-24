<?php
namespace MyApp;

require_once('deal.php');
require_once('poker.php');
require_once('change.php');
require_once('data.php');

$change = new \MyApp\Change();
$trumps = $change->changeCards();
$changeHands = $change->convertCards($trumps);

$poker = new \MyApp\Poker();
list($yaku, $result) = $poker->getYaku($changeHands);

// 勝敗判定
$judge = $result < $cpResult ? 'あなたの勝ちです' : ($result === $cpResult ? '引き分けです' : 'あなたの負けです');