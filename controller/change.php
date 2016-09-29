<?php
namespace MyApp;
/**
 * 手札再振り分けクラス
 */
class Change
{
    /**
    * 手札を交換する
    * @param $kitty 山札
    * @return $trumps 山札からドローしたトランプ
    */
    public function changeCards($kitty) {
        // 捨てられたカードの値を受け取り、その数をカウントする
        if(isset($_POST['change'])) {
            $results = $_POST['change'];
            $cntBet = count($results);
            // 山札から捨てられた枚数分引く
            $draws = array_slice($kitty, 0, $cntBet);
            // ドローしたものを整形
            foreach ($draws as $draw) {
                $drew[] = $draw['mark'].'_'.$draw['number'].".gif";
            }
            // 自分の手札を受け取る
            $trumps = $_POST['trumps'];
            // 捨てられたカードのkeyにドローしたカードのvalueをいれる
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
            return $trumps;
        }else{
            // 自分の手札を受け取る
            $trumps = $_POST['trumps'];
            return $trumps;
        }
    }

    /**
    * トランプを返却
    * @param
    * @return $trump シャッフルされたトランプ
    */
    public function convertCards($trumps) {
        //数字を抽出
        $numbers = [];
        $numbers = preg_replace('/[^0-9]/', '', $trumps);

        //文字列を抽出
        $marks = [];
        foreach ($trumps as $trump) {
            $marks[] = strstr($trump, "_", true);
        }

        //markとnumberを合体
        $changeHands = [];
        for ($i=0; $i < 5; $i++) {
            $changeHands[] = array(
                'number' => (int)$numbers[$i],
                'mark' => $marks[$i]
                );
        }
        return $changeHands;
    }

    /**
    * セッションの値を返却
    * @return $kitty 山札
    * @return $cphands 相手の手札
    * @return $cpRank 相手の役
    * @return $cpResult 相手の役の値
    */
    public function getSession() {
        $kitty   = $_SESSION['kitty'];
        $cphands = $_SESSION['cphands'];
        $cpRank = $_SESSION['cpRank'];
        $cpResult = $_SESSION['cpResult'];
        return array($kitty, $cphands, $cpRank, $cpResult);
    }
}