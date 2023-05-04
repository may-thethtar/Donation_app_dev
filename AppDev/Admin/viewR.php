<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>ViewRegister</title>
   
   
</head>
<style>
body{
  padding: 20px;
  margin: 20px;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
h2{text-align: center;}

</style>
<body>

<?php include "header.php";?>
<br><br>

<?php
try {
    $db=new PDO("mysql:hostname='localhost';dbname=Donation","root","");
 // echo "connection sucessfully";
   $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);//to except the error for the connection 
  
} catch (PDOException $e) {
    echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}
$sql=$db->prepare("SELECT * FROM register");
$sql->execute();

?>
<div class="container">
<h2>Registeration of Funding and Helping Donation System</h2><br>
  <div class="row">
    <div class="col-md-12">
    <div class="card">
      <div class="card-hader">
        <div class="card-title">Registeration List</div>
        <div class="card-body">
<table class="table table-bordered">
  <th width=5%  >FirstName</th><!-- for heading bold/why we should th cause not to show every time while looping  -->
  <th width=5%  >LastName</th>
  <th width=5%  > Email</th>
  <th width=5%  > Phone</th>
  <th width=5%   >Password </th>
  
  <th width=5%  > </th>
  
  <?php 
  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { /* PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set */

      
      extract($row);
  ?>
  <tr></tr>
  <tr>
  
   <td  ><?php  echo $Firstname;?> </td><!-- this all varibale are the colum of the database -->
   <td  ><?php  echo $Lastname;?> </td>
   <td><?php  echo $Gmail;?> 
   <td><?php  echo $Phone;?> 
    <td><?php  echo $Passowrd?> 
    
    
  
  
   <td><a href="deleteR.php?did=<?php echo $IID ;?>"> Delete </a></td>
 
   </tr>
 <?php }?>
  
</table>
        </div>
      </div>
    </div>
    </div>
</div>
<br><br><br>

  
</body>

</html>
