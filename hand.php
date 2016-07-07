<?php

namespace MyApp;

class Hand
{
    public function getHand()
    {
        $trump = array(
            array("number" => 1, "mark" => "clubs", "img" => "clubs_1"),
            array("number" => 2, "mark" => "clubs", "img" => "clubs_2"),
            array("number" => 3, "mark" => "clubs", "img" => "clubs_3"),
            array("number" => 4, "mark" => "clubs", "img" => "clubs_4"),
            array("number" => 5, "mark" => "clubs", "img" => "clubs_5"),
            array("number" => 6, "mark" => "clubs", "img" => "clubs_6"),
            array("number" => 7, "mark" => "clubs", "img" => "clubs_7"),
            array("number" => 8, "mark" => "clubs", "img" => "clubs_8"),
            array("number" => 9, "mark" => "clubs", "img" => "clubs_9"),
            array("number" => 10, "mark" => "clubs", "img" => "clubs_10"),
            array("number" => 11, "mark" => "clubs", "img" => "clubs_11"),
            array("number" => 12, "mark" => "clubs", "img" => "clubs_12"),
            array("number" => 13, "mark" => "clubs", "img" => "clubs_13"),
            array("number" => 1, "mark" => "hearts", "img" => "hearts_1"),
            array("number" => 2, "mark" => "hearts", "img" => "hearts_2"),
            array("number" => 3, "mark" => "hearts", "img" => "hearts_3"),
            array("number" => 4, "mark" => "hearts", "img" => "hearts_4"),
            array("number" => 5, "mark" => "hearts", "img" => "hearts_5"),
            array("number" => 6, "mark" => "hearts", "img" => "hearts_6"),
            array("number" => 7, "mark" => "hearts", "img" => "hearts_7"),
            array("number" => 8, "mark" => "hearts", "img" => "hearts_8"),
            array("number" => 9, "mark" => "hearts", "img" => "hearts_9"),
            array("number" => 10, "mark" => "hearts", "img" => "hearts_10"),
            array("number" => 11, "mark" => "hearts", "img" => "hearts_11"),
            array("number" => 12, "mark" => "hearts", "img" => "hearts_12"),
            array("number" => 13, "mark" => "hearts", "img" => "hearts_13"),
            array("number" => 1, "mark" => "spades", "img" => "spades_1"),
            array("number" => 2, "mark" => "spades", "img" => "spades_2"),
            array("number" => 3, "mark" => "spades", "img" => "spades_3"),
            array("number" => 4, "mark" => "spades", "img" => "spades_4"),
            array("number" => 5, "mark" => "spades", "img" => "spades_5"),
            array("number" => 6, "mark" => "spades", "img" => "spades_6"),
            array("number" => 7, "mark" => "spades", "img" => "spades_7"),
            array("number" => 8, "mark" => "spades", "img" => "spades_8"),
            array("number" => 9, "mark" => "spades", "img" => "spades_9"),
            array("number" => 10, "mark" => "spades", "img" => "spades_10"),
            array("number" => 11, "mark" => "spades", "img" => "spades_11"),
            array("number" => 12, "mark" => "spades", "img" => "spades_12"),
            array("number" => 13, "mark" => "spades", "img" => "spades_13"),
            array("number" => 1, "mark" => "diams", "img" => "diams_1"),
            array("number" => 2, "mark" => "diams", "img" => "diams_2"),
            array("number" => 3, "mark" => "diams", "img" => "diams_3"),
            array("number" => 4, "mark" => "diams", "img" => "diams_4"),
            array("number" => 5, "mark" => "diams", "img" => "diams_5"),
            array("number" => 6, "mark" => "diams", "img" => "diams_6"),
            array("number" => 7, "mark" => "diams", "img" => "diams_7"),
            array("number" => 8, "mark" => "diams", "img" => "diams_8"),
            array("number" => 9, "mark" => "diams", "img" => "diams_9"),
            array("number" => 10, "mark" => "diams", "img" => "diams_10"),
            array("number" => 11, "mark" => "diams", "img" => "diams_11"),
            array("number" => 12, "mark" => "diams", "img" => "diams_12"),
            array("number" => 13, "mark" => "diams", "img" => "diams_13")
        );

        // キーと値の関係を保持したままシャッフル（サイトのパクリ）
        if (!is_array($trump)) return $trump;
            $keys = array_keys($trump);
            shuffle($keys);
            $shuffle = array();
            foreach ($keys as $key) {
                $shuffle[$key] = $trump[$key];
            }
        // 5件取得
        $myHand = array_slice($shuffle, 0,5);

        return $myHand;
    }
}
