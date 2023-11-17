<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $host='localhost';
    $user='root';
    $pass='';
    $dbname='database';

    $conn=mysqli_connect($host ,$user ,$pass,$dbname);

    $sql="INSERT INTO contactinfo(name , email, phone, message) values('$name' , '$email','$phone'.'$message')";
    mysqli_query($conn,$sql);

}
?>
