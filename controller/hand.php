<?php
namespace MyApp;

class Hand
{
    public function getHand()
    {
        $trump = array();
        $marks = array('spades', 'hearts', 'diams', 'clubs');
        // パクリ先URL=>http://php-archive.net/php/blackjack/
        foreach($marks as $mark){
            for($i=1;$i<=13;$i++){
                $trump[] = array(
                    'number' => $i,
                    'mark' => $mark
                );
            }
        }
        // $trumpはトランプ一式
        shuffle($trump);

        // 0から5枚を自分の手札とする
        $myhands = array_slice($trump, 0, 5);

        // 6から5枚を相手の手札とする
        $cphands = array_slice($trump, 6, 5);

        return array($myhands,$cphands);
    }
}
