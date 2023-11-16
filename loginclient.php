<?php
$username1 = filter_input(INPUT_POST, 'username1');
$password1 = filter_input(INPUT_POST, 'password1');
if (!empty($username)) {
  if (!empty($password)) {
    $host = "localhost";
    $dbusername = "root";
    $dbname = "glitchmob";
    $dbpassword = "";
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()) {
      die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {
      $sql = "INSERT INTO login (username1,password1)
     values ('$username1','$password1')";
      if ($conn->query($sql)) {
        header("Location: client-advo.html");
        exit;
      } else {
        echo "Error:" . $sql . "<br>" . $conn->error;;
      }
      $conn->close();
    }
  } else {
    echo "Password should not be empty";
    die();
  }
} else {
  echo "Username should not be empty";
  die();
}
