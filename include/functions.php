<?php
    session_start();
    function config(){
        $server="localhost";
        $user="root";
        $password="";
        $db="CMS";
        $connect=mysqli_connect($server,$user,$password,$db);

        return $connect;
    }

