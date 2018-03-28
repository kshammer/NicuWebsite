<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="coolStyle.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="indexJava.js"></script>
    <title>Scores</title>
</head>

<body>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="calculate.html">Calculate Score</a>
        <a href="display.php">View Patients</a>
        <a href="index.html">Logout</a>
    </div>

<?php
require_once 'config.php';
ini_set('display_errors', 1);

$sql = 'SELECT behavior, cardiovascular, respiratory, abdominal, feeds, formula FROM patient1';
$retval = $link->query($sql);

if(! $retval ) {
   die('Could not get data: ' . mysql_error());
}
if ($retval->num_rows > 0) {
    // output data of each row
    echo "<center>";
    echo "<style>".
    "table, th, td {".
        "border: 1px solid black;".
        "background-color: white;".
    "}".
    "</style>";
    echo "<table>";
    echo " <tr>".
    "<th>behavior</th>".
    "<th>cardiovascular</th>". 
    "<th>respiratory</th>".
    "<th>abdominal</th>".
    "<th> feeds</th>".
    "<th> formula</th>".
  "</tr>";
    while($row = $retval->fetch_assoc()) {
        echo "<tr>
        <td>{$row['behavior']}  </td> ".
        "<td>{$row['cardiovascular']} </td> ".
        "<td> {$row['respiratory']} </td> ".
        "<td>{$row['abdominal']}</td> ".
        "<td> {$row['feeds']}</td> ".
        "<td> {$row['formula']}</td> ".
        "
        </tr>";
    }
    echo "</table>";
    echo "</center>";
} else {
    echo "0 results";
}
$link->close();
?>    
</body>

</html>
