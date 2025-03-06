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
//問題１
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

echo "Bさんの電話番号は{$personalInfos[1]["tel"]}です。";

//問題２

foreach ($personalInfos as $keys => $value){
    $keys ++;
    echo "{$keys}番目の{$value['name']}のメールアドレスは{$value['mail']}で、電話番号は{$value['tel']}です。\n";
}

//問題３

$ageList = [25, 30, 18];

$i = 0;
$num = 0;

foreach($personalInfos as $keys => $value){
    
    $personalInfos[$i]['age'] = $ageList[$num];
    
    $i++; 
    $num++;
}

var_dump($personalInfos);


// Q3 オブジェクト-1


// Q4 オブジェクト-2


// Q5 定義済みクラス
?>