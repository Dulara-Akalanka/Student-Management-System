<?php

require_once("conn.php");

$name=$_POST['name'];
$phone=$_POST['phone'];

$sql="INSERT INTO student_info (name,phone_no) VALUES ('$name','$phone')";

$conn->query($sql);