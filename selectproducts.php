<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<title>Select Products</title>
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


$sql = "SELECT*FROM products";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
echo "<table><tr><th>ID</th><th>Product ID</th><th>Name</th><th>Description</th><th>Type</th><th>Created Date</th><th>Modified Date</th><th>Created IP</th><th>Modified IP</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
    	

        echo "<tr id='row'><td>" . $row["id"]. "</td><td>" . $row["product_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["description"]. "</td><td>" . $row["type"]. "</td><td>" . $row["created_date"]. "</td><td>" . $row["modified_date"]."</td><td>". $row["created_ip"]."</td><td>".$row["modified_ip"]."</td></tr>";

    
    }
    echo "</table><br><br>";
} else {
    echo "0 results";
}

$sqls = "SELECT id, product_id, name FROM products";
$results = mysqli_query($conn, $sqls);
if (mysqli_num_rows($results) > 0) {
echo "<table><tr><th>ID</th><th>Product ID</th><th>Name</th></tr>";
    while($rows = mysqli_fetch_assoc($results)) {
        echo "<tr><td>" . $rows["id"]. "</td><td>" . $rows["product_id"]. "</td><td>" .$rows["name"]."</td></tr>";

    
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</html>
