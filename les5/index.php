<?php
include "config.php";

$sql = "select * from img_info";
//echo $sql;
$res = mysqli_query($connect,$sql);

while($data = mysqli_fetch_assoc($res)): ?>
  <a href="server.php?id=<?= $data['id']?>"  target="_blank"> <img src="img-small/<?= $data['img']?>" style = "cursor: pointer"></a><hr>
<?php
   endwhile;
?>

