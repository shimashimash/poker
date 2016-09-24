<?php
namespace MyApp;
/**
 * トランプ振り分けクラス
 */
class Deal
{
    /**
    * トランプを返却
    * @param Array
    * @return string
    */
    public function getTrump() {
        return $this->shuffleTrump();
    }

    /**
    * 自分の手札を返却
    * @param Array $trump
    * @return string
    */
    public function getHand($trump) {
        $myhands = array_slice($trump, 0, 5);
        return $myhands;
    }

    /**
    * cpの手札を返却
    * @param Array $trump
    * @return string
    */
    public function getCphand($trump) {
        $cphands = array_slice($trump, 6, 5);
        return $cphands;
    }

    /**
    * 山札を返却
    * @param Array $trump
    * @return string
    */
    public function getKitty($trump) {
        $kitty = array_slice($trump, 11, 42);
        return $kitty;
    }

/*------------ここからprivateメソッド--------------*/
    /**
    * トランプをシャッフルして返却
    * @param Array $trump
    * @return string
    */
    private function shuffleTrump() {
        $trump = array();
        $marks = array('spades', 'hearts', 'diams', 'clubs');
        // パクリ先URL=>http://php-archive.net/php/blackjack/
        foreach($marks as $mark) {
            for($i=1; $i <= 13; $i++){
                $trump[] = array(
                    'number' => $i,
                    'mark' => $mark
                );
            }
        }
        // $trumpはトランプ一式
        shuffle($trump);

        return $trump;
    }
}
