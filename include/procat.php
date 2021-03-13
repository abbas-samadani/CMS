<?php
function addproduct($data){
    //var_dump($data);
    $connection = config();
    $sql = "INSERT INTO product_cat (title,status,sort) VALUES ('$data[title]','$data[status]','$data[sort]')";
    $row = mysqli_query($connection,$sql);
    //$res = mysqli_fetch_array($row);
    //var_dump($res);
}

function listproductadmin(){
    $connection = config();
    $sql = "SELECT * FROM product_cat ";
    $row = mysqli_query($connection,$sql);
    while ($res = mysqli_fetch_array($row)){
        $result[]=$res;
    }
    return $result;
}

function deleteproduct($id){
    $connection = config();
    $sql = "DELETE FROM product_cat WHERE id='$id'";
    mysqli_query($connection,$sql);

}

function showeditproduct($id){
    $connection = config();
    $sql = "SELECT * FROM product_cat WHERE id='$id'";
    $row = mysqli_query($connection,$sql);
    $res = mysqli_fetch_array($row);
    return $res;
}
function editproduct($data , $id){
    $connection = config();
    $sql = "UPDATE product_cat SET title='$data[title]', sort='$data[sort]', status='$data[status]' WHERE id='$id'";
    mysqli_query($connection,$sql);
}