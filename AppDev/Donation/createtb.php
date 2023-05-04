<?php 

include 'connection.php';
try {
    $sql="CREATE TABLE Register(IID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(IID),
    Firstname VARCHAR(100),
    Lastname VARCHAR(100),
    Gmail VARCHAR(100),
    Phone Int(100),
   Passowrd VARCHAR(100))";
    $db->exec($sql);//to execute
    echo "Table created sucessfully";
} catch (PDOException $e) {
    echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}

?>