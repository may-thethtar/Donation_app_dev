<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>ViewPosting</title>
   
   
</head>
<style>
body{
  padding: 20px;
  margin: 20px;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
h2{ text-align: center;}
</style>
<body>

<?php include "header.php";?>
<br><br><br>
<h2>Postings of Funding and Helping Donation System</h2><br><br>
<?php
try {
    $db=new PDO("mysql:hostname='localhost';dbname=Donation","root","");
 // echo "connection sucessfully";
   $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);//to except the error for the connection 
  
} catch (PDOException $e) {
    echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}

$sql=$db->prepare("SELECT * FROM posting");
$sql->execute();

?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title"> Posting Lists</div>
        <div class="card-body">
<table class="table table-bordered">
  <th width=20%  > Name</th><!-- for heading bold/why we should th cause not to show every time while looping  -->
  <th width=10%  > Category</th>
  <th width=20%  > Postings</th>
  <th width=10%  >Image </th>
  <th width=5%  > Action</th>
  <th width=5%  > Action</th>

 
  
  <?php 
  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { /* PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set */     
      extract($row);
  ?>
  <tr>
   <td  ><?php  echo $Name;?> </td><!-- this all varibale are the colum of the database -->
   <td><?php  echo $Category;?> 
   <td><?php  echo $Post;?> 
   <td><img src="<?php echo "image/".$Image;?>" width="100" height="100" class="center" align="center"></td>
   <td><a href="edit.php?eid=<?php echo $IID ;?>"> Edit </a></td>
  <td> <a href="deleteP.php?did=<?php echo $IID ;?>"> Delete </a></td>
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
