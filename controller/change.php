<?php
namespace MyApp;
/**
 * 手札再振り分けクラス
 */
class Change
{
    public function changeCards() {
        // 山札取得
        session_start();
        $kitty = $_SESSION['kitty'];

        // 捨てられたカードの値を受け取り、その数をカウントする
        if(isset($_POST['bet'])) {
            $results = $_POST['bet'];
            $cntBet = count($results);
        }else{
            $cntBet = 0;
        }

        // 山札から捨てられた枚数分引く
        $draws = array_slice($kitty, 0, $cntBet);

        // ドローしたものを整形
        foreach ($draws as $draw) {
            $drew[] = $draw['mark'].'_'.$draw['number'].".gif";
        }

        // 自分の手札を受け取る
        if(isset($_POST['trumps'])) {
            $trumps = $_POST['trumps'];
        }

        // 捨てられたカードのkeyにドローしたカードのvalueをいれる
        if (isset($results)) {
            foreach ($results as $key => $value) {
                if (($key = array_keys($trumps, $value)) !== false) {
                    foreach($key as $ke){
                        $keies[] = $ke;
                    }
                }
            }
            for ($i=0; $i<$cntBet; $i++) {
                $replace = array($keies[$i] => $drew[$i]);
                $trumps = array_replace($trumps, $replace);
            }
        }
        return $trumps;
    }
}