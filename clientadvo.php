<?php
$ClientName = filter_input(INPUT_POST, 'ClientName');
$ClientContact = filter_input(INPUT_POST, 'ClientContact');
$ClientAddress = filter_input(INPUT_POST, 'ClientAddress');
$Fir = filter_input(INPUT_POST, 'Fir');
$Casedesc = filter_input(INPUT_POST, 'Casedesc');
$typ = filter_input(INPUT_POST, 'typ');


$host = "localhost";
$dbusername = "root";
$dbname = "glitchmob";
$dbpassword = "";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()) {
  die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
  $sql = "INSERT INTO clientadvo (ClientName,ClientContact,ClientAddress,Fir,Casedesc,typ)
        values ('$ClientName','$ClientContact','$ClientAddress','$Fir','$Casedesc','$typ')";
  if ($conn->query($sql)) {
    header("Location:Registered.html");
  } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
