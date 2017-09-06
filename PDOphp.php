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
    echo "New record created successfully";

}

function selectAllRows($tableNameSelectAll) {
	$sqlInsert = "SELECT* FROM $tableNameSelectAll";

}




//function execution below

createDataBase('my_db'); // create database execution

createTable('round', 
			'name', 
			'varchar(50)'
);

addRow('round', 'Lemuel');
?>


  
