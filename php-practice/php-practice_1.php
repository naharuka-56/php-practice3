<?php
// Q1 変数と文字列

$name = "中山";
echo "私の名前は「" .$name ."」です。";


// Q2 四則演算

$num = 5*4;

echo $num."\n";
echo $num / 2;

// Q3 日付操作

date_default_timezone_set("Asia/Tokyo");
$date = date("現在時刻は、Y年m月d日 H時間i分s秒です。");
echo $date; 

// :Q4 条件分岐-1 if文   if else 一つだけ

$device = "windows";

if ($device === "windows" || $device === "mac") {
    echo '使用OSは、'."$device" .'です。';
}
    else {echo 'どちらでもありません。';
        
        //if ( $device === "mac"){
        //  echo '使用OSは、macです。';
        // }else {
        //echo 'どちらでもありません。';
        //   }
          }


// Q5 条件分岐-2 三項演算子　if禁止

$age = 20;
$message = ($age > 18) ? '成人です。' : '未成年です。';

echo $message;

//if ($age < 18){
//    echo "未成年です。";
//}else {
//    echo "成人です。";
//}

// :Q6 配列

$prefectures = ['東京都', '神奈川県', '栃木県', '千葉県', '茨城県', '群馬県', '埼玉県'];

echo "$prefectures[2]と$prefectures[3]は関東地方の都道府県です。";

// Q7 連想配列-1

$prefectures = ['東京都'=>'新宿区', '神奈川県'=>'横浜市', '栃木県'=>'宇都宮市', '千葉県'=>'千葉市', '茨城県'=>'水戸市', '群馬県'=>'前橋市', '埼玉県'=>'さいたま市'];

echo $prefectures['東京都']."\n";
echo $prefectures['神奈川県']."\n";
echo $prefectures['千葉県']."\n";
echo $prefectures['埼玉県']."\n";
echo $prefectures['栃木県']."\n";
echo $prefectures['群馬県']."\n";
echo $prefectures['茨城県']."\n";

// Q8 連想配列-2

$prefectures = ['東京都'=>'新宿区', '神奈川県'=>'横浜市', '栃木県'=>'宇都宮市', '千葉県'=>'千葉市', '茨城県'=>'水戸市', '群馬県'=>'前橋市', '埼玉県'=>'さいたま市'];

foreach ($prefectures as $x => $y){
   if ($x ==='埼玉県'){
    echo $x .'の県庁所在地は、'. $y .'です。';
    }
    }

//: Q9 連想配列-3　既存の

$prefectures['愛知県'] = '名古屋市';
$prefectures['大阪府'] = '大阪市';

foreach ($prefectures as $x => $y){
   if ($x ==='東京都' || $x ==='神奈川県' || $x ==='栃木県' || $x ==='千葉県' || $x ==='茨城県' || $x ==='群馬県' || $x ==='埼玉県'){
    echo $x .'の県庁所在地は、'. $y .'です。' ."\n";
   } 
   else{ echo $x .'は関東地方ではありません。' ."\n";
    }
}

// Q10 関数-1

function hello($name)
{
    echo $name .'さん、こんにちは。'. "\n";
}

hello('金谷');
hello('安藤');

// :Q11 関数-2

function calcTaxInPrice($price)
{
    $taxInPrice = "$price" * 1.1;
    echo "$price" . '円の商品の税込価格は' . "$taxInPrice". '円です。';
}

calcTaxInPrice(1000);

// Q12 関数とif文

function distinguishNum($num)
{
    if ($num % 2 == 0) {
        echo $num .'は偶数です。' ."\n";
    }else{
        echo $num .'は奇数です。' ."\n";
    }
}

distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文

function evaluateGrade($grade)
{
    switch ($grade) {
        case 'A':
        case 'B':
            echo '合格です。'."\n";
            break;
        
        case 'C':
            echo '合格ですが追加課題があります。'."\n";
            break;
        
        case 'D':
            echo '不合格です。'."\n";
            break;
            
        default:
            echo '判定不明です。講師に問い合わせてください。'."\n";
            break;
    }
}

evaluateGrade('A');
evaluateGrade('D');

?>