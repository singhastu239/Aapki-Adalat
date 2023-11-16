<?php
$Name = filter_input(INPUT_POST, 'Name');
$DOB = filter_input(INPUT_POST, 'DOB');
$MobileNo = filter_input(INPUT_POST, 'MobileNo');
$gender = filter_input(INPUT_POST, 'gender');
$email = filter_input(INPUT_POST, 'email');
$AadharNumber = filter_input(INPUT_POST, 'AadharNumber');
$Verification = filter_input(INPUT_POST, 'Verification');
$Address = filter_input(INPUT_POST, 'Address');
$UserName = filter_input(INPUT_POST, 'UserName');
$password = filter_input(INPUT_POST, 'password');
$pswrepeat = filter_input(INPUT_POST, 'pswrepeat');

$host = "localhost";
$dbusername = "root";
$dbname = "glitchmob";
$dbpassword = "";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()) {
  die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
  $sql = "INSERT INTO clients(Name,DOB,MobileNo,gender,email,AadharNumber,Verification,Address,username,password,pswrepeat)
        values ('$Name','$DOB','$MobileNo','$gender','$email','$AadharNumber','$Verification','$Address','$UserName','$password','$pswrepeat')";
  if ($conn->query($sql)) {
    header("Location: login_c.html");
  } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
