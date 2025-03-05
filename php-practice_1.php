<?php
// Q1 変数と文字列
$name ='山下';
echo '私の名前は「'.$name.'」です。'

// Q2 四則演算
$num = 5*4;
echo $num."/n";
echo $num/2;

// Q3 日付操作
echo '現在の時刻は、'. date("2019年05月23日 14時48分22秒"). 'です。' ;

// Q4 条件分岐-1 if文
$device = 'windows';


if($device == 'windows'){
    echo '使用OSはwindowsです';
}else{
    if($device == 'mac'){
        echo '使用OSはmacです';
        }else{
            echo 'どちらでもありません。';
    
        }    
    }

// Q5 条件分岐-2 三項演算子
$age = 25;

$message = ($age > 18) ? '成人です。' : '未成年です';

echo $message;

// Q6 配列
$pre = ['群馬県','東京都','神奈川県','栃木県','千葉県','茨城県'];

echo "$pre[3]と$pre[4]は関東地方の都道府県です。";

// Q7 連想配列-1
capitalcity = ['東京' => '新宿区', '神奈川' => '横浜市',
                '千葉' => '千葉市', '埼玉' => 'さいたま市', '栃木' => '宇都宮市',
            '群馬' => '前橋市', '茨城' => '水戸市'];
            
echo $capitalcity['東京']."\n";
echo $capitalcity['神奈川']."\n";
echo $capitalcity['千葉']."\n";
echo $capitalcity['埼玉']."\n";
echo $capitalcity['栃木']."\n";
echo $capitalcity['群馬']."\n";
echo $capitalcity['茨城'];



// Q8 連想配列-2
$capitalcity = ['東京都' => '新宿区', '神奈川県' => '横浜市',
                '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市',
            '群馬県' => '前橋市', '茨城県' => '水戸市' ];
            
$keys = array_keys($capitalcity);

$input = 'さいたま市';

if(in_array($input,$capitalcity)){
    echo "{$keys[3]}の県庁所在地は、{$capitalcity['埼玉県']}です。";
}

// Q9 連想配列-3


// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>