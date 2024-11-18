<?php

$imgName=$_GET['file'];
// unlink = delete
unlink("./files/$imgName");
header("location:manage.php");


?>