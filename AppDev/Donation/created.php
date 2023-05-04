<?php 

include 'connection.php';
try {
    $sql="CREATE TABLE Donation(IID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(IID),
    Name VARCHAR(100),
    Email VARCHAR(100),
    Phone Int(100),
    City VARCHAR(100),
    Nameoncard VARCHAR(100),
    Cardno Int(100),
    ExpY Int(100),
    CVC Int(100),
    Amount Int(100))";
    $db->exec($sql);//to execute
    echo "Table created sucessfully";
} catch (PDOException $e) {
    echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}

?>