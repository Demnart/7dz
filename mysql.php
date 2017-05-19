<?php

function connectToDB(){
    return $resurce = mysqli_connect('localhost','root','death9393','lesson7');
}

function querryToDB($sql){
    $resource= connectToDB();
    return $result=mysqli_query($resource,$sql);
}

function getDataFromDB($sql){
    $array=[];
    $result = querryToDB($sql);
    while (NULL !== $row = mysqli_fetch_array($result)){
        $array[] = $row;
    }
    return $array;
}