<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo'success';
}else{
    echo'connection lost';
}
mysqli_select_db($con, 'rahul');

$user =  $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$question = $_POST['question'];
$comment = $_POST['country'];




$query=" insert into userinfo (name, email, mobile, question, comment) values ('$user','$email','$mobile','$question','$comment')";
echo "$query";
mysqli_query($con, $query );

header('location:index.php');




?>