<?php
ob_start();
session_start();
    function config(){
        $server="localhost";
        $user="root";
        $password="";
        $db="CMS";
        $connect=mysqli_connect($server,$user,$password,$db);

        return $connect;
    }
$m= $_GET['m'];
switch ($m){
    case 'menu':
        include_once 'menu.php';
    case 'product_cat':
        include_once 'procat.php';
    case 'product':
        include_once 'products.php';
}






