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

    function addmenu($data){
        //var_dump($data);
        $connection = config();
        $sql = "INSERT INTO menu_tbl (title,url,status,chid,sort) VALUES ('$data[title]','$data[url]','$data[status]','$data[parent]','$data[sort]')";
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

    function listmenuadmin(){
        $connection = config();
        $sql = "SELECT * FROM menu_tbl ";
        $row = mysqli_query($connection,$sql);
        while ($res = mysqli_fetch_array($row)){
            $result[]=$res;
        }
        return $result;
    }

    function selectParentMenu($chid){
        $connection = config();
        $sql = "SELECT * FROM menu_tbl WHERE id='$chid'";
        $row = mysqli_query($connection,$sql);
        $res = mysqli_fetch_array($row);
        return $res['title'];
    }

    function deletemenu($id){
        $connection = config();
        $sql = "DELETE FROM menu_tbl WHERE id='$id'";
        mysqli_query($connection,$sql);

    }

function showedit($id){
    $connection = config();
    $sql = "SELECT * FROM menu_tbl WHERE id='$id'";
    $row = mysqli_query($connection,$sql);
    $res = mysqli_fetch_array($row);
    return $res;
}
function editmenu($data , $id){
    $connection = config();
    $sql = "UPDATE menu_tbl SET title='$data[title]', url='$data[url]', sort='$data[sort]', chid='$data[parent]' , status='$data[status]' WHERE id='$id'";
    mysqli_query($connection,$sql);
}

function showmenu(){
    $connection = config();
    $sql = "SELECT * FROM menu_tbl WHERE status='1' AND chid='0' ORDER BY sort ASC ";
    $row = mysqli_query($connection,$sql);
    while ($res = mysqli_fetch_array($row)){
        $result[]=$res;
    }
    return $result;
}

function showSubmenu($id){

    $connection = config();
    $sql = "SELECT * FROM menu_tbl WHERE status='1' AND chid='$id' ORDER BY sort ASC ";
    $row = mysqli_query($connection,$sql);
    if(mysqli_num_rows($row)){
        while ($res = mysqli_fetch_array($row)){
            $result[]=$res;
        }
        return $result;
    }

}



