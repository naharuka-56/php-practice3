<?php
// Q1 tic-tac問題

// Q1 tic-tac問題

echo '1から100までのカウントを開始します'."\n";

for ($num=1; $num<=100; $num++){
    if ($num % 4 == 0 && $num % 5 == 0){
        echo 'tic-tac'."\n";
    }
    elseif ($num % 4 == 0) {
        echo 'tic'."\n";
    }
    elseif ($num % 5 == 0){
        echo 'tac'."\n";
    }
    else{echo $num ."\n";}
    
  }

// Q2 多次元連想配列

//問題１
echo $personalInfos[1]['name'].'の携帯電話番号は'.$personalInfos[1]['tel'].'です。';

//問題２
foreach ($personalInfos as $x => $y)
{
  echo ($x+1).'番目の'. $y['name'].'のメールアドレスは'.$y['mail'].'で、電話番号は'.$y['tel'].'です。'."\n";
}

//問題３
$personalInfos[0]['age'] = 25;
$personalInfos[1]['age'] = 30;
$personalInfos[2]['age'] = 18;

var_dump($personalInfos);

// Q3 オブジェクト-1

$studentId = 120 ;
$studentName = '中山';

echo '学籍番号'.$studentId.'番の生徒は'.$studentName.'です。';

// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        $this->attend = $subject;
        echo  $this->studentName.'は'.$this->attend. 'の授業に出席しました。学籍番号：'. $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス

//問題１

$date = new DateTime();
echo $date->modify('-1 month')->format('Y-m-d');

//問題２

$date1 = new DateTIme('1992-04-25');
$date2 = new DateTime();
$diff = $date1->diff($date2);
echo 'あの日から'.$diff->format('%r%a').'日経過しました。';

?>