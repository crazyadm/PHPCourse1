<?
echo "Задание 1";
$a = rand(0,1000);
$b = rand(0,1000);

//rand генерирует только положительные, то для генерации знака 
if (rand(0,1) == 0) {$a=-$a;};
if (rand(0,1) == 0) {$b=-$b;};

if ($a>=0 && $b>=0) {
 echo "<br> a = $a b = $b - положительные, их разность = ", ($a-$b);
};

if ($a<0 && $b<0){
    echo "<br> a = $a b = $b - отрицательные, их произведение = ", ($a*$b);
};

if (($a<0 && $b>=0) || ($a>=0 && $b<0)) {
    echo "<br> a = $a b = $b - разнознаковые, их сумма = ", ($a+$b);
};
echo "<br>";
echo "Задание 2<br>";
switch ($a=rand(0,15)) {
 case 0: echo "$a 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 ";
         break;   
 case 1: echo "$a 2 3 4 5 6 7 8 9 10 11 12 13 14 15 ";
         break;
 case 2: echo "$a 3 4 5 6 7 8 9 10 11 12 13 14 15 ";
         break;
 case 3: echo "$a 4 5 6 7 8 9 10 11 12 13 14 15 ";
         break;
 case 4: echo "$a 5 6 7 8 9 10 11 12 13 14 15 ";
         break;
 case 5: echo "$a 6 7 8 9 10 11 12 13 14 15 ";
         break;
 case 6: echo "$a 7 8 9 10 11 12 13 14 15 ";
         break;
 case 7: echo "$a 8 9 10 11 12 13 14 15 ";
         break;
 case 8: echo "$a 9 10 11 12 13 14 15 ";
         break;
 case 9: echo "$a 10 11 12 13 14 15 ";
         break;
 case 10: echo "$a 11 12 13 14 15 ";
          break; 
 case 11: echo "$a 12 13 14 15 ";
          break;
 case 12: echo "$a 13 14 15 ";
          break;
 case 13: echo "$a 14 15 ";
          break;
 case 14: echo "$a 15 ";
          break;
 case 15: echo "$a ";
};
echo "<br>";
echo "Задание 3<br>";
$a = 2;
$b = 3;

function plus($a, $b) {
    return a + b;
};

function minus($a, $b) {
    return a - b;
};

function div ($a, $b) {
    return a / b;
};

function mult ($a, $b) {
    return a + b;
};

echo "<br>";
echo "Задание 4<br>";
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'plus':
            return plus($arg1, $arg2);
        break;
        case 'minus':
            return minus($arg1. $arg2);
        break;
        case 'div':
            return div($arg1, $arg2);
        break;
        case 'mult':
            return mult($arg1, $arg2);
    }
};


echo "<br>";
echo "Задание 5<br>";
// вывести год в подвале шаблона - выполнено в прощлом ДЗ


echo "<br>";
echo "Задание 6<br>";
function power($val, $pow) {
    if ($pow == 0) {
        return 1;
    };
    if ($pow == 1) {
        return $val;
    };
    if ($pow > 1) {
    for ($i=1; $i<=$pow; $i++){
        $val *= $val;
    };
    return $val;
    };
};

echo "<br>";
echo "Задание 7<br>";
$h = date("H")-1;
$m = date("i");
  if ($h==1 || $h==21) {
   $hours = " час";}
  elseif (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) {
   $hours = " часа";}
  else {$hours = " часов";}
  if (($m<20) || ($m>10))
   {$minutes = " минут.";}
  elseif (($m % 10) === 1) {
   $minutes = " минута.";}
  elseif ((($m % 10)>=2) && (($m % 10)<=4)) {
   $minutes = " минуты.";}
  else {
   $minutes = " минут.";}
echo $h . $hours . " " . $m . $minutes;
?>