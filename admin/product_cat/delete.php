<?php
ob_start();
$id=$_GET['id'];
deleteproduct($id);
header("location:dashboard.php?m=product&p=list");
?>