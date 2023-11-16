<?php
$ClientName = filter_input(INPUT_POST, 'ClientName');
$AdvocateName = filter_input(INPUT_POST, 'AdvocateName');
$ContingencyFees = filter_input(INPUT_POST, 'ContingencyFees');
$ConsultationFees = filter_input(INPUT_POST, 'ConsultationFees');
$FlatFees = filter_input(INPUT_POST, 'FlatFees');
$ReferralFees = filter_input(INPUT_POST, 'ReferralFees');
$CostsofSuits = filter_input(INPUT_POST, 'CostsofSuits');
$TotalFees = filter_input(INPUT_POST, 'TotalFees');



$host = "localhost";
$dbusername = "root";
$dbname = "glitchmob";
$dbpassword = "";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()) {
    die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
    $sql = "INSERT INTO invoice (ClientName,AdvocateName,ContingencyFees,ConsultationFees,FlatFees,ReferralFees,CostsofSuits,TotalFees)
        values ('$ClientName','$AdvocateName','$ContingencyFees','$ConsultationFees','$FlatFees','$ReferralFees','$CostsofSuits','$TotalFees')";
    if ($conn->query($sql)) {
        header("Location:REPOSITORY.html");
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }


    $conn->close();
}
