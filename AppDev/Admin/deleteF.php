<?php



try {
    $db=new PDO("mysql:hostname='localhost';dbname=Donation","root","");
 // echo "connection sucessfully";
   $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);//to except the error for the connection 
  
} catch (PDOException $e) {
    echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}

$did= $_GET['did'];

$sql=$db->prepare("DELETE FROM contact WHERE IID=$did");
$sql->execute();

echo "
<script>alert('This feedback is  deleted')</script>
<script>window.location = 'viewF.php'</script>
";
//*  Redirect the browser header(); */

?>