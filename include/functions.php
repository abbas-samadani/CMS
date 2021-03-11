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

    function addmenu($data){
        var_dump($data);
        $connection = config();
        $sql = "INSERT INTO menu_tbl (title,url,status,chid) VALUES ('$data[title]','$data[url]','$data[status]','$data[parent]')";
        $row = mysqli_query($connection,$sql);
        //$res = mysqli_fetch_array($row);
        //var_dump($res);
    }

    function submenu(){
        $connection = config();
        $sql = "SELECT * FROM menu_tbl WHERE chid='0'";
        $row = mysqli_query($connection,$sql);
        //$res = mysqli_fetch_array($row);
        //var_dump($res);
        while ($res = mysqli_fetch_array($row)){
            $result[]=$res;
        }
        return $result;
    }

    submenu();

