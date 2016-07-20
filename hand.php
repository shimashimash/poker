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
        shuffle($trump);
        $myhand = array_slice($trump, 0, 5);
        $yamafuda = array_slice($trump, 6, 52);
        return $myhand;
    }
}
