<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
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
      $sql = "INSERT INTO loginlawyer (username,password)
     values ('$username','$password')";
      if ($conn->query($sql)) {
        header("Location: display_table.php");
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
