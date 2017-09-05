<?php
$servername = "localhost";
$username = "root";
$password = "admin123";
$dbName = "my_db";

try {
    $GLOBALS['conn'] = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
    $GLOBALS['conn']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


//create database function

function createDataBase($dbName) {

    $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
    $GLOBALS['conn']->exec($sql);
    echo "Database created successfully<br>";
}


//create Table function

function createTable($tableName, $column1, $datatype) {
	$sqlTable = "CREATE TABLE IF NOT EXISTS $tableName($column1 $datatype)";
    $GLOBALS['conn']->exec($sqlTable);
    echo "Table created successfully";
}


function addRow($tableName, $value) {

	$sqlInsert = "INSERT INTO $tableName(name)
    VALUES ('$value')";
    $GLOBALS['conn']->exec($sqlInsert);
    echo "New record created successfully";

}




//function execution below

createDataBase('my_db'); // create database execution

createTable('round', 'name', 'varchar(50)'); // create table execution

addRow('round', 'Lemuel');
?>


  
