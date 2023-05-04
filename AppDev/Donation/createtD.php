<?php




try {
    $db=new PDO("mysql:hostname='localhost';dbname=Donation","root","");
 // echo "connection sucessfully";
   $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);//to except the error for the connection 
  
} catch (PDOException $e) {
    echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}


try {
	$sql="CREATE TABLE Donation(IID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(IID),
  	Name VARCHAR(400),
    NRC VARCHAR(255),
    Method VARCHAR(255),
    Cardno VARCHAR(255),
    Expixy int(255),
    Cvv  int(255),
    Amount VARCHAR(255)
    )";
	$db->exec($sql);//to execute
	echo "Table created sucessfully";
} catch (PDOException $e) {
	echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}

?>