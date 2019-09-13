<?php
//работа с переменными
//1 задание
$a = 3;
$b=$a;
echo $b;

//2
$a= 10;
$b=2;

$sum = $a+$b;
$razn = $a-$b;
$proizvedenie=$a*$b;
$delenie=$a/$b;
$srznach=$sum/2;
$x=$sum/$srznach;
$r=$razn/$srznach;
$u=$proizvedenie/$srznach;
$i=$delenie/$srznach;

echo $x, $r, $u, $i;

//3
$c=15;
$d=2;
$result = $c+$d;
echo $result;


//4
$a=10;
$b=2;
$c=5;

$summ=($a+$b+$c);
$srznach=$summ/3;
echo $result=$summ/$srznach;
//5
$a= 17;
$b=10;
$c = $a-$b;
$d=17;
$result = $c+$d;
echo $result;

//работа со строками
//1
$text ='Привет, Мир!';
echo $text,"Моя первая программа!";

//2&
$text1='Привет, ';
$text2='Мир!';
echo $text1,$text2;


//3
$name ='arina';
$text ='Новый текст';
echo "Привет, ",$name,"!<br>";
echo $text;

//4
$age ='19';
$height ='160';
echo "Мой возраст:",$age | "Мой рост:",$height  ;

//5

$text ='abcde';

echo $text[0];
echo $text[2];
echo $text[4];

//Работа с массивами
//1
$arr=['a', 'b', 'c'];
foreach($arr as $value){
    echo $value;
};
echo $arr[0],$arr[1],$arr[2];
//2
$string=$arr[0]+$arr[1]+$arr[2];
echo $string;

//3
$arr=['a', 'b', 'c', 'd'] ;
echo $arr[0],"+",$arr[1], $arr[2],"+",$arr[3],$arr[0],"-",$arr[3],$arr[0],"/",$arr[3];
//4
$arr=[2,5,3,9];
$result = ($arr[0]*$arr[1])+($arr[2]*$arr[3]);
echo $result;

//5


//Ассоциативные массивы
//1
$arr=['a'=>11,'b'=>20,'c'=>30];
echo $arr['c'], $arr[0]+$arr[1]+$arr[2];

//2
$arr=['q3'=>12, 'r3'=>23, 'f3'=>34];
echo array_sum($arr);

//3
$arr= ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo $arr['Коля'], $arr['Петя'];
//4
$arr= ['1'=>'январь', '2'=>'февраль', '3'=>'март',
    '4'=>'апрель', '5'=>'май', '6'=>'июнь',
    '7'=>'июль', '8'=>'август', '9'=>'сентябрь',
    '10'=>'октябрь', '11'=>'ноябрь', '12'=>'декабрь'];
echo $arr['9'], " " ,$arr['6'];

//5
$day='4';
$arr=['1'=>'Понедельник', '2'=>'Вторник', '3'=>'Среда',
    '4'=>'Четверг', '5'=>'Пятница', '6'=>'Суббота', '7'=>'Воскресение'];
echo $arr[$day];


















































