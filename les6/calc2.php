<?php
 
if (isset($_GET['a']))
$x=(int)($_GET['a']);
else $x=10;
if (isset($_GET['b'])) 
$y=(int)($_GET['b']);
else
$y=10;
if (isset($_GET['sign']))
$sign=htmlspecialchars($_GET['sign']);
else 
$sign='plus';


if (isset($x)&&isset($y))
switch ($sign) {  
case 'plus':
    $result=$x+$y;
    break;
case 'minus':
    $result=$x-$y;
    break;
case 'pow':
    $result=$x*$y;
    break;
case 'dev':
    if ($y!=0) $result=$x/$y;
    else $result='Division by Zero!';
}
?>
    <br>
    <div>
    <p><a href="calc2.php"> Вариант 2. </a> Создать калькулятор, который будет определять тип выбранной пользователем операции, 
    ориентируясь на нажатую кнопку.</p>
    </div>
    <br>

<form >

<input name="a" type="number" value="<?=$x?>">
<input type="submit" name="sign" value="plus" style="width: 50px">
<input type="submit" name="sign" value="minus" style="width: 50px">
<input type="submit" name="sign" value="pow" style="width: 50px">
<input type="submit" name="sign" value="dev" style="width: 50px">
<input name="b" type="number"  value="<?=$y?>"> =  <?=$result ?>
</form>

<br>
    <div>
    <p><a href="index.php"> Вариант 1. </a> Создать форму-калькулятор операциями: сложение, 
    вычитание, умножение, деление. Не забыть обработать деление на ноль! 
    Выбор операции можно осуществлять с помощью тега select.</p>
    </div>
    <br>

