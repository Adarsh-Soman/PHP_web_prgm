<html>
<body>
<h2 style="margin:100px">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName="mca";

$conn = mysqli_connect($servername, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$title=$_POST["bookname"];
$author= $_POST["author"];
$edition=$_POST["edition"];
$pub=$_POST["publisher"];


$sql = "INSERT INTO books (book_name,author,editions,publisher) VALUES ('$title', '$author', '$edition','$pub')";

if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

mysqli_close($conn);
?>
<br><a href="book_form.html">back to form</a>
</h2>

</body>
</html>