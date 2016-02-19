<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

td, th {
    border: 3px solid white;
	text-align: center;
	color: white;
}

</style>
</head>
<body>

<?php
$id = intval($_GET['id']);


$con = mysqli_connect('localhost','','');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"amm15_brunoMattia");

$sql="SELECT * FROM Film WHERE id_film = '".$id."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Id</th>
<th>Titolo</th>
<th>Durata</th>
<th>Prezzo</th>
<th>Magazzino</th>
</tr>";while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
	echo "<td>" . $row['id_film'] . "</td>";
	echo "<td>" . $row['titolo'] . "</td>";
    echo "<td>" . $row['durata'] . "</td>";
    echo "<td>" . $row['prezzo'] . "</td>";
    echo "<td>" . $row['magazzino'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>