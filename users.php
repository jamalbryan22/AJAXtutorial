<?php


//connecting to a database
$conn = mysqli_connect('localhost','root','123456','ajaxTest');

$query = 'SELECT * FROM users';

//get result
$result = mysqli_query($conn,$query);

//fetch data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);;

echo json_encode($users);