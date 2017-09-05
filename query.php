<!-- <?php
$servername = "localhost";
$username = "root";
$password = "admin123";
$dbname = "my_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$counter = 1;

while($counter<=50){
$sql = "INSERT INTO `products`(`id`, `product_id`, `name`, `description`, `type`, `created_date`, `modified_date`, `created_ip`, `modified_ip`) 
	VALUES ('','serial$counter','product$counter','description$counter','type$counter','2017-09-04','2017-09-04','180.232.127.154','180.232.127.154')";

if ($counter % 2 == 0) {
$gender = 1;
} else { $gender = 2;}
$sql = "INSERT INTO `users`(`id`, `first_name`, `middle_name`, `last_name`, `gender`, `birthday`, `created_date`, `modified_date`, `created_ip`, `modified_ip`) 
		VALUES ('','firstname$counter','middlename$counter','lastname$counter','$gender','1995-02-15','2017-09-04','2017-09-04','180.232.127.154','180.232.127.154')";
	 $counter++;
	

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    $counter++;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>
 -->

