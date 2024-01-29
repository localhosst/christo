<?php
$conn = mysqli_connect('localhost','root','','student1');
if($conn){
    echo "connection sucees";
}else{
    echo "connection failed";
}