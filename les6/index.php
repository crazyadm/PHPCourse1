
<?php
    if (isset($_GET['x']))
		$x=(int)($_GET['x']);
    else $x=10;
    if (isset($_GET['y'])) 
		$y=(int)($_GET['y']);
    else
		$y=10;
    if (isset($_GET['sign']))
		$sign=htmlspecialchars($_GET['sign']);
    else 
		$sign='plus';
   
    if (isset($x)&&isset($y))
	  switch ($sign) {  
        case 'plus':
            $z=$x+$y;
            break;
        case 'minus':
            $z=$x-$y;
            break;
        case 'pow':
            $z=$x*$y;
            break;
        case 'dev':
            if ($y!=0) $z=$x/$y;
            else $z='Division by Zero!';
    }
    ?>
    <div>
    <p><a href="index.php"> Вариант 1. </a>Создать форму-калькулятор операциями: сложение, 
    вычитание, умножение, деление. Не забыть обработать деление на ноль! 
    Выбор операции можно осуществлять с помощью тега select.</p>
    </div>
    <form>
        <input name="x" type="number" value="<?=$x?>">
        <select name="sign" style="width: 50px">
            <option <?php if ($sign=='plus') echo "selected"?> value="plus">+</option>
            <option <?php if ($sign=='minus') echo "selected"?> value="minus">-</option>
            <option <?php if ($sign=='pow') echo "selected"?> value="pow">*</option>
            <option <?php if ($sign=='dev') echo "selected"?> value="dev">/</option>
        </select>
        <input name="y" type="number"  value="<?=$y?>">
        <input type="submit" value="=" ">
        <b><?php if (isset($z)) echo "$z"?></b>
		
	</form>
    <br>
    <div>
    <p><a href="calc2.php"> Вариант 2. </a> Создать калькулятор, который будет определять тип выбранной пользователем операции, 
    ориентируясь на нажатую кнопку.</p>
    </div>
    <br>


