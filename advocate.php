<?php
$Name = filter_input(INPUT_POST, 'Name');
$AdvID = filter_input(INPUT_POST, 'AdvID');
$DOB = filter_input(INPUT_POST, 'DOB');
$MobileNo = filter_input(INPUT_POST, 'MobileNo');
$gender = filter_input(INPUT_POST, 'gender');
$email = filter_input(INPUT_POST, 'email');
$AadharNumber = filter_input(INPUT_POST, 'AadharNumber');
$BarEnrollmentNumber = filter_input(INPUT_POST, 'BarEnrollmentNumber');
$Field = filter_input(INPUT_POST, 'Field');
$Enterdetails = filter_input(INPUT_POST, 'Enterdetails');
$OfficeAddress = filter_input(INPUT_POST, 'OfficeAddress');
$Experience = filter_input(INPUT_POST, 'Experience');
$Wins = filter_input(INPUT_POST, 'Wins');
$Losses = filter_input(INPUT_POST, 'Losses');
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
  $sql = "INSERT INTO advocate (Name,DOB,MobileNo,gender,email,AadharNumber,BarEnrollmentNumber,Field,OfficeAddress,Experience,Wins,Losses,UserName,password,pswrepeat)
        values ('$Name','$DOB','$MobileNo','$gender','$email','$AadharNumber','$BarEnrollmentNumber','$Field','$OfficeAddress','$Experience','$Wins','$Losses','$UserName','$password','$pswrepeat')";
  if ($conn->query($sql)) {
    header("Location: login_adv.html");
  } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
