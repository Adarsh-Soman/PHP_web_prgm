<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT id, First_name, Last_name FROM people";
$result = $conn->query($sql);
echo "<table>";
echo "<tr><th>Id</th><th>NAME</th></tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> " . $row["id"]. " </td>";
        echo "<td> &nbsp&nbsp&nbsp&nbsp" . $row["First_name"]. " " . $row["Last_name"]. "</td></tr>";
    }
} else {
    echo "<tr>";
    echo "0 results</tr>";
}
echo "</table> ";
$conn->close();
?>