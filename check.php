<?php
session_start();
require_once("conn.php");
//$conn= new mysqli("localhost", "root", "", "information");


$username=$_POST['username'];
$password=$_POST['password'];

if (isset($_POST['login'])){

    $sql="SELECT * FROM access_info WHERE username='$username' && password ='$password';";
    $result = $conn->query($sql);
   
    $num=$result->num_rows;
   // var_dump($result);
    if ($num>0) {
       // require_once("data.php");
       $_SESSION['username']=$username;
       header ("Location: data.php");
       // echo "Login Successfully";
    }else {
        echo "Invalid Username and Password";
       // header ("Location: index.php");
       echo" <script>alert('Invalid Username and Password')</script>";

      echo" <script>location.href='index.php'</script>";
    }
    echo "Hi";

}