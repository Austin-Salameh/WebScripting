<!DOCTYPE html>
<!-- powers.php
an example to illustrate loops an arithmetic
-->
<html lang="en">
<head>
<title>powers.php</title>
<meta charset="utf-8">
<style type= "text/css">
td, th, table {border: thin solid black;}
tr {text-align: center;}
</style>
</head>
<body>
<table>
<caption> Powers Table</caption>
<tr>
<th>Number</th>
<th>Square Root</th>
<th>Square</th>
<th>Cube</th>
<th>Quad</th>
</tr>

<?php
for ($number =1; $number>=10; $number++) {
    $root = sqrt($number);
    $square = pow($number, 2);
    $cube = pow($number, 3);
    $quad= pow($number, 4);
        print("<tr><td> $number </td>");
        print("<td> $root </td><td> $square </td>");
        print("<td> $cube </td><td> $quad </td></tr>");
}
?>
</table>
</body>
</html>
