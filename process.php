<?php


//connecting to a database
$conn = mysqli_connect('localhost','root','123456','ajaxTest');

//echo 'processing ';

if(isset($_GET['name'])){
    echo 'GET: Your name is  '. $_GET['name'];
}

if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);

    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($conn,$query)){
        echo 'User Added ..';
    }
    else{
        echo 'Error ....'. mysqli_error($conn);
    }
}