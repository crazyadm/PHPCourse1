<?php

include "config.php";

$id = $_GET['id'];

$sql = "UPDATE img_info SET count=count+1 where id=$id";
if(mysqli_query($connect,$sql)){
// не разобрался как обновить index.php
}
else{
    echo "Ошибка сохранения данных!";
};

$sql = "SELECT addres, count FROM img_info WHERE id=$id";
$res = mysqli_query($connect,$sql);
while($data = mysqli_fetch_assoc($res)):
?>
  <img src="<?= $data['addres']?>" style = "cursor: pointer"><br>
  <p>Число просмотров - <?= $data['count'] ?></p>
<?php
 endwhile;
 ?>
 