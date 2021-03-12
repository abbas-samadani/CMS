<?php
ob_start();
$id=$_GET['id'];
deletemenu($id);
header("location:dashboard.php?m=menu&p=list");
?>