<?php
$images = scandir("img");
for($i=2;$i<count($images);$i++): ?>
   <a href="img/<?= $images[$i]?>"  target="_blank"> <img src="img/<?= $images[$i]?>" width = "25%" style = "cursor: pointer"></a><hr> 
 <?
 endfor;
?>

