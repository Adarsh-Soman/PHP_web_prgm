<?php
// Define an array of Indian cricket players' names
$players = array("Virat Kohli", "Rohit Sharma", "Jasprit Bumrah", "Ravindra Jadeja", "Hardik Pandya", "Shikhar Dhawan", "KL Rahul", "Yuzvendra Chahal", "Mohammed Shami", "Axar Patel");
?>
<html>
    <head>
        <title>Indian Cricket team</title>
        <style>
			body{
		
				margin-top: 40px;
		
			}
			.container{
			  
				position: relative;
                margin-left: 20%;
				padding: 50px;
				width: 500px;
				height: 500px;
				box-shadow: 10px 10px 10px rgba(0, 0, 0, .1),
							-10px -10px 10px rgba(255, 255, 255, 1),
							inset 10px 10px 10px  rgba(0, 0, 0, .1),
							inset -10px -10px 10px rgba(255, 255, 255, 1);
				border-radius: 10px;
			}
            th,td{
                height: 45px;
                }   
 
           
 
            table {
             width: 50%;
            }
		</style>
    </head>
    <body>
        <div class="container">
        <table border="1px solid black">
            <?php
           
            echo "<tr><th>Indian Cricket Players</th></tr>";


            foreach($players as $player) {
            echo "<tr><td>" . $player . "</td></tr>";
            }

            ?>
        </table>
        </div>
    </body>
</html>