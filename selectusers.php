<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<title>Select User</title>
</head>
<?php
$serverName = "localhost";
$username = "root";
$password = "admin123";
$dbName = "my_db";

// Create connection
$conn = new mysqli($serverName, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT*FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
echo "<table><tr><th>ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Gender</th><th>Birthday</th><th>Created Date</th><th>Modified Date</th><th>Created IP</th><th>Modified IP</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
    	

    	if($row["gender"] == 1) {
    		$gender = 'Male';
    	} else {
    		$gender = 'Female';
    	}

        echo "<tr id='row'><td>" . $row["id"]. "</td><td>" . $row["first_name"]. "</td><td>" . $row["middle_name"]. "</td><td>" . $row["last_name"]. "</td><td>" . $gender. "</td><td>".$row["birthday"]."</td><td>". $row["created_date"]. "</td><td>" . $row["modified_date"]."</td><td>". $row["created_ip"]."</td><td>".$row["modified_ip"]."</td></tr>";

    
    }
    echo "</table><br><br>";
} else {
    echo "0 results";
}

$sqls = "SELECT id, first_name, last_name FROM users";
$results = mysqli_query($conn, $sqls);
if (mysqli_num_rows($results) > 0) {
echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>";
    while($rows = mysqli_fetch_assoc($results)) {
        echo "<tr><td>" . $rows["id"]. "</td><td>" . $rows["first_name"]. "</td><td>" .$rows["last_name"]."</td></tr>";

    
    }
    echo "</table>";
} else {
    echo "0 results";
}





?>
</html>


<!-- ALTER TABLE `users` ADD INDEX `ip` (`ip`)
 -->