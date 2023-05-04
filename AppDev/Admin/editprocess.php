<?php


try {
    $db=new PDO("mysql:hostname='localhost';dbname=Donation","root","");
 // echo "connection sucessfully";
   $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);//to except the error for the connection 
  
} catch (PDOException $e) {
    echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}

$id=$_POST['id'];
$name=$_POST['Name'];
$category=$_POST['Category'];
$post=$_POST['Post'];
$oldimg=$_POST['oldimg'];
$newimg=$_FILES['newimg']['name'];

if($newimg!="")
{
    $updatephoto = $newimg;
    move_uploaded_file($_FILES['newimg']['tmp_name'], "image/".$newimg);
}
else {
    $updatephoto = $oldimg;
}
$sql=$db->prepare("UPDATE posting SET IID='$id', Name='$name', Category='$category',
Post='$post', image='$updatephoto' WHERE IID='$id'");
$sql->execute();
echo "
          <script>alert('This posting is edited')</script>
          <script>window.location = 'viewP.php'</script>
        ";
      
?>


