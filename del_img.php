<?php

include_once "function.php";

$id=$_GET['id'];
$imgName=(find('imgs',$id))['filename'];

// 上面一行等於這兩行的合併
// $row=find('imgs',$id);
// $imgName=$row['filename'];

unlink("./files/$imgName");
del("imgs",$id);
header("location:manage.php");

?>