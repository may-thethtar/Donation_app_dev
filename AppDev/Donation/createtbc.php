<?php

include 'connection.php';
try {
	$sql="CREATE TABLE Contact(IID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(IID),
  	 Name VARCHAR(100),
    Gmail VARCHAR(100),
    Phone INT,
   	Recommend VARCHAR(255))";
	$db->exec($sql);//to execute
	echo "Table created sucessfully";
} catch (PDOException $e) {
	echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}

?>