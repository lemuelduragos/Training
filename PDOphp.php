<?php
require_once('connection.php');

//create database function

function createDataBase($dbName) {
    $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
    $conn = new DatabaseConnection();
    $conn->exec($sql);
    echo "Database created successfully<br>";
}


//create Table function

function createTable($tableName, $column1, $datatype) {
	$sqlTable = "CREATE TABLE IF NOT EXISTS $tableName($column1 $datatype)";
	$conn = new DatabaseConnection();
    $conn->exec($sqlTable);
    echo "Table created successfully";
}


function addRow($tableName, $value) {
	$sqlInsert = "INSERT INTO $tableName(name)
    VALUES ('$value')";
    $conn = new DatabaseConnection();
    $conn->exec($sqlInsert);
    echo "New record created successfully<br>";

}

function selectAllRows($tableNameSelectAll) {
	$sqlInsert = "SELECT* FROM $tableNameSelectAll";
	$conn = new DatabaseConnection();
	$stmt = $conn->prepare($sqlInsert);
	$stmt->execute();
	$cou = $stmt->rowCount();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	echo "<table>";
	foreach($result as $row) {
		echo "<tr><td>".$row['first_name']."</td>";
		echo "<td>".$row['middle_name']."</td>";
		echo "<td>".$row['last_name']."</td>";
		echo "<td>".$row['gender']."</td>";
		echo "<td>".$row['birthday']."</td>";
		echo "<td>".$row['created_date']."</td>";
		echo "<td>".$row['modified_date']."</td>";
		echo "<td>".$row['created_ip']."</td>";
		echo "<td>".$row['modified_ip']."</td></tr>";
	}
	echo "</table><br><br>";
}

function selectRow($tableNameSelectAll) {
	$sqlInsert = "SELECT* FROM $tableNameSelectAll LIMIT 1";
	$conn = new DatabaseConnection();
	$stmt = $conn->prepare($sqlInsert);
	$stmt->execute();
	$cou = $stmt->rowCount();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	echo "<table>";
	foreach($result as $row) {
		echo "<tr><td>".$row['first_name']."</td>";
		echo "<td>".$row['middle_name']."</td>";
		echo "<td>".$row['last_name']."</td>";
		echo "<td>".$row['gender']."</td>";
		echo "<td>".$row['birthday']."</td>";
		echo "<td>".$row['created_date']."</td>";
		echo "<td>".$row['modified_date']."</td>";
		echo "<td>".$row['created_ip']."</td>";
		echo "<td>".$row['modified_ip']."</td></tr>";
	}
	echo "</table>";
}



function updateRow($columnName, $newValue, $id) {
	$sqlUpdate = "UPDATE users SET $columnName='$newValue' WHERE id=$id";
    $conn = new DatabaseConnection();
    $stmt = $conn->prepare($sqlUpdate);
    $stmt->execute();
    echo "Record successfully updated!<br>";

}

function deleteRow($tableName, $id){
	$sqlDelete = "DELETE FROM $tableName WHERE id= '$id'";
	$conn = new DatabaseConnection();
	$conn->exec($sqlDelete);
	echo "Record Successfully Deleted!";
}



//function execution below

createDataBase('my_db'); // create database execution

createTable('round', 
			'name', 
			'varchar(50)'
);

addRow('round', 'Lemuel');

selectAllRows('users');
selectRow('users');
updateRow('first_name','firstname1', '1');
deleteRow('users','50');

?>


  

