<!DOCTYPE html>
<head>
    <title>Add Post</title>
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
    <div class="container">
        <div class="row">
        <form method="POST" action="addP.php" enctype="multipart/form-data">
            <div class="col-md-12">
                
                <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Add Postings
                    </div>
                </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="Name" class="form-control" placeholder="Enter title" required>
                        </div><br>
                        <div class="form-group">
                        <label>Category</label>
                        <input type="text" name="Category" class="form-control" placeholder="Ente Category" required>
                        </div><br>
                        <div class="form-group">
                        <label>Postings</label>
                        <textarea name="Post" class="form-control" required></textarea>
                        </div><br>
                        <div class="form-group">
                            <lable>Image</lable>
                            <input type="file" name="Image" class="form-control" required>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button class="btn btn-primary" class=" float-center" name="submit">Create</button>
                    </div>
                </div>
            </div></form>
        </div>
    </div>
   
<?php
  if (isset($_POST['submit'])) {
    if (isset($_FILES['Image'])) {
      $errors = array();
      $filename = $_FILES['Image']['name'];
      $filesize = $_FILES['Image']['size'];
      $filetype = $_FILES['Image']['type'];
      $filetmp = $_FILES['Image']['tmp_name'];
      $file_ext = explode("/", $filetype);
      $fileex = strtolower(end($file_ext));
      $extension = array("png", "jpg", "jpeg", "gif");
      if (in_array($fileex, $extension) == FALSE) {
        $errors[] = "invalid file type";
        print_r($errors);
      } else if ($filesize > 2097152) {
        $errors[] = "invalid file size";
        print_r($errors);
      } else if (empty($errors) == TRUE) {
        move_uploaded_file($filetmp, "image/" . $filename);
      } else print_r($errors);
    }
    try {
   

        try {
            $db=new PDO("mysql:hostname='localhost';dbname=Donation","root","");
         // echo "connection sucessfully";
           $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);//to except the error for the connection 
          
        } catch (PDOException $e) {
            echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
        }
        
        
      $sql = "INSERT INTO posting (name,category,post,image)
         VALUES(?,?,?,?)";
      $sq = $db->prepare($sql);

      $name = $_POST['Name'];
      $category = $_POST['Category'];
      $post = $_POST['Post'];
      $image = $filename;

      if ($sq->execute(array($name, $category, $post, $image))) {
      }
      {
        echo "
              <script>alert('Posting added')</script>
              <script>window.location = 'viewP.php'</script>
            ";
          
      }
      
     
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  ?>
</body>
</html>