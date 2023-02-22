<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Search</title>
    <style>
			body{
		
				margin-top: 40px;
		
			}
			.container{
			  
				position: relative;
                margin-left: 20%;
				padding: 50px;
				width: 650px;
				height: auto;
				box-shadow: 10px 10px 10px rgba(0, 0, 0, .1),
							-10px -10px 10px rgba(255, 255, 255, 1),
							inset 10px 10px 10px  rgba(0, 0, 0, .1),
							inset -10px -10px 10px rgba(255, 255, 255, 1);
				border-radius: 10px;
			}
            th,td{
                height: 45px;
                padding:30px;
                }   
 
           
 
            table {
             width: 70%;
             border: 1px solid black;
            }
		</style>
</head>
<body>
<div class="container">
    <h2><center>BOOK DETAILS</center></h2>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mca";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $author=$_POST["author"];
        $sql = "SELECT * FROM books where author='$author'";
        $result = $conn->query($sql);
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>BOOK NAME</th>
            <th>AUTHOR</th>
            <th>EDITION</th>
            <th>PUBLISHER</th>
        </tr>
        <?php 
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td> " . $row["id"]. " </td>";
                    echo "<td>" . $row["book_name"]. " </td><td>" . $row["author"]. "</td>";
                    echo "<td>". $row["editions"]."</td><td>".$row["publisher"]."</td></tr>";
                }
            } else {
                echo "<tr>";
                echo "0 results</tr>";
            }
        ?>
    </table>
 </div>
</body>
</html>