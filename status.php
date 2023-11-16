<<!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Status</title>
        <link rel="stylesheet" href="template.css">
        <style>
            body {
                background-image: url(back1.jpg);
                background-size: cover;
            }

            td {
                text-align: center;
                color: white;
                font-family: Helvetica;
            }

            th {
                font-size: 26px;
                font-family: Helvetica;
            }

            table,
            td,
            th {
                border: 1px solid white;
                padding: 5px;
                color: white;
                border-collapse: collapse;
                background-color: black;

            }

            h1 {
                color: white;
                text-align: center;
                font-family: Helvetica;
                font-size: 35px;
            }

            ul {
                border-radius: 20px;
                overflow: hidden;
                margin-top: 20px;
                background-color: orange;
            }

            li {
                text-align: center;
                font-size: 25px;
                font-family: monospace;
                font-weight: bold;
                float: right;
                margin: auto;
                display: block;
                color: white;
                padding: 25px;
            }

            #container {
                position: fixed;
                width: 340px;
                height: 280px;
                top: 50%;
                left: 50%;
                margin-top: -140px;
                margin-left: -170px;
                background: #fff;
                border-radius: 3px;
                border: 1px solid #ccc;
                box-shadow: 0 1px 2px rgba(0, 0, 0, .1);

            }
        </style>
    </head>

    <body>
        <h1>Aapki Adalat</h1>
        <ul>
            <a href="FAQ">
                <li>FAQ</li>
            </a>
            <a href="about.html">
                <li>ABOUT</li>
            </a>
            <a href="login.html">
                <li>LOGIN</li>
            </a>
            <a href="index.html">
                <li>HOME</li>
            </a>
        </ul>

        <h3>
            <table width="100%" align="center">
                <tr>
                    <th>CASE NUMBER</th>
                    <th>DEFENDING LAWYER</th>
                    <th>OPPOSING LAWYER</th>
                    <th>CASE VERDICT</th>
                    <th>NEXT HEARING DATE</th>
                </tr>
                <?php

                // Establishing Connection
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "glitchmob";

                $conn = new mysqli($host, $user, $pass, $db);

                if ($conn->connect_error) {
                    die("Connection Failed: " . $conn->connect_error);
                }
                // SQL Query to fetch data from database
                $sql = "SELECT * FROM finalreports";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['CaseNumber'] . "</td>";
                        echo "<td>" . $row['DefendingLawyer'] . "</td>";
                        echo "<td>" . $row['OpposingLawyer'] . "</td>";
                        echo "<td>" . $row['verdict'] . "</td>";
                        echo "<td>" . $row['dates'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }
                echo "</table>";

                $conn->close();
                ?>

            </table>
        </h3>

    </body>

    </html>