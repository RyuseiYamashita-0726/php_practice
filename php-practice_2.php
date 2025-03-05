<?php
// Q1 tic-tac問題
function tictac($i){
    
    if($i % 4 == 0 and $i % 5 == 0){
        echo "tictac\n";
    }elseif($i % 4 == 0){
        echo "tic\n";
    }elseif($i % 5 == 0){
        echo "tac\n";
    }else{
        echo "{$i}\n";
    }
}



for($i = 1; $i <= 100; $i++){
    tictac($i);
}

// Q2 多次元連想配列


// Q3 オブジェクト-1


// Q4 オブジェクト-2


// Q5 定義済みクラス
?>