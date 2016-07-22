<?php

namespace MyApp;

class Hand
{   
    private $hand;

    public function getHand()
    {
        $yamafuda = $this->setHand();
        return $yamafuda;
    }

    private function setHand()
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
        $random = shuffle($trump);
        return $random;
        // $myhand = array_slice($trump, 0, 5);
        // //$cphand = array_slice($trump, 6, 10);
        // //$yamafuda = array_slice($trump, 11, 52);
        // return $myhand;
    }
}
