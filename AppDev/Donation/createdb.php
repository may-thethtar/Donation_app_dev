<?php 

include 'connection.php';
try {
    $sql="CREATE TABLE Item(IID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(IID),
    Name VARCHAR(100),
   Password VARCHAR(100))";
    $db->exec($sql);//to execute
    echo "Table created sucessfully";
} catch (PDOException $e) {
    echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}

?>