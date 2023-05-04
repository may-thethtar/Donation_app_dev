<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>ViewFeedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   
</head>
<style>
body{
  padding: 50px;
  margin: 20px;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
 h2{text-align: center;}
</style>
<body>
<?php include "header.php";?>

<?php

try {
    $db=new PDO("mysql:hostname='localhost';dbname=Donation","root","");
 // echo "connection sucessfully";
   $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);//to except the error for the connection 
  
} catch (PDOException $e) {
    echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}

$sql=$db->prepare("SELECT * FROM contact");
$sql->execute();

?>
<div class="container">
    
<h2>Recommendation of Funding and Helping Donation System</h2><br><br>
  <div class="row">
    <div class="col-md-12">
    <div class="card">
  <div class="card-header">
  <div class="card-title">
    Feedback list
  </div>
  </div>
  <div class="card-body">
  <table class="table table-bordered">
  <th width=20%  >Full Name</th><!-- for heading bold/why we should th cause not to show every time while looping  -->
  <th width=10%  > Email</th>
  <th width=20%  > Phone</th>
  <th width=10%   >Messages </th>
  <th width=5%  >Action </th>
  
  <?php 
  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { /* PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set */
      extract($row);
  ?>
  <tr>
  
   <td  ><?php  echo $Name;?> </td><!-- this all varibale are the colum of the database -->
   <td><?php  echo $Gmail;?> 
   <td><?php  echo $Phone;?> 
   <td><?php  echo $Recommend;?>
   <td><a href="deleteF.php?did=<?php echo $IID ;?>"> Delete </a></td>
 
   </tr>
 <?php }?>
  
</table>
  </div></div>
    </div></div>
</div>
<br><br><br>

  
</body>

</html>
