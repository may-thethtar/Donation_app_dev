<!DOCTYPE html>
<head>
    <title>Edit Post</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   <style>
    body{
  padding: 80px;
  margin: 20px;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
  background-color: black;
}
   </style>
</head>
<body>
    <?php include"header.php";?>
    <?php

try {
    $db=new PDO("mysql:hostname='localhost';dbname=Donation","root","");
 // echo "connection sucessfully";
   $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);//to except the error for the connection 
  
} catch (PDOException $e) {
    echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}

$eid=$_GET['eid'];

$sql=$db-> prepare("SELECT * FROM posting WHERE IID=$eid");
$sql->execute();

$row=$sql->fetch(PDO::FETCH_ASSOC);
extract($row);?>

<?php $photo="image/".$Image;?>
    <div class="container">
    <form enctype="multipart/form-data" method="POST" action="editprocess.php">
        <div class="row">
       
            <div class="col-md-12">
            <input type="hidden" name="id" value="<?php echo $IID; ?>"><br> 
                <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Add Postings
                    </div>
                </div>
                    <div class="card-body">
                        <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="Name" class="form-control" value="<?php echo $Name?>" required>
                        </div><br>
                        <div class="form-group">
                        <label>Category</label>
                        <input type="text" name="Category" class="form-control" value="<?php echo $Category?>" required>
                        </div><br>
                        <div class="form-group">
                        <label>Postings</label>
                        <textarea name="Post" class="form-control" placeholder="<?php echo $Post?>" required></textarea>
                        </div><br>
                        <div class="form-group">
                            <lable>Image</lable>
                            <img src='<?php echo "image/".$Image;?>' width=200 height=auto><br><br>
                        </div>
                        <div class="form-group">
	                        <input type="hidden" name="oldimg" value="<?php echo $image?>">
                            <label for="image">Image</label></td>
                             <input type="file" name="newimg">
                        </div>
                    </div>
                    <div class="card-footer">
                    <button class="btn btn-primary" class=" float-center" type="submit" name="submit">Update</button>
                    </div>
                </div>
            </div></form>
        </div>
    </div>

</body>
</html>