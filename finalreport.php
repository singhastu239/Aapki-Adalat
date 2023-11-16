<?php

$CaseNumber = filter_input(INPUT_POST, 'CaseNumber');
$HearingDate = filter_input(INPUT_POST, 'HearingDate');
$Field = filter_input(INPUT_POST, 'Field');
$DefendingLawyer = filter_input(INPUT_POST, 'DefendingLawyer');
$Defendingwitnesses = filter_input(INPUT_POST, 'Defendingwitnesses');
$OpposingLawyer = filter_input(INPUT_POST, 'OpposingLawyer');
$Opposingwitnesses = filter_input(INPUT_POST, 'Opposingwitnesses');
$verdict = filter_input(INPUT_POST, 'verdict');
$dates = filter_input(INPUT_POST, 'dates');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "glitchmob";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
  die('Connect error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
  $SELECT = "SELECT CaseNumber From finalreports where CaseNumber = ? Limit 1";
  $sql = "INSERT Into finalreports (CaseNumber, HearingDate, Field, DefendingLawyer, Defendingwitnesses, OpposingLawyer, Opposingwitnesses, verdict, dates )
     values ('$CaseNumber','$HearingDate','$Field','$DefendingLawyer','$Defendingwitnesses','$OpposingLawyer','$Opposingwitnesses','$verdict','$dates')";

  if ($conn->query($sql)) {
    header("Location: invoice.html");
  } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
