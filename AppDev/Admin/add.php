<html>
    <head>
        <title>Add Postings</title>
        <style>
            body {
    background-color: #155724;
    padding-top: 50px;
    padding-left: 50px;
    padding-right: 50px;
    padding-bottom:  50px;
}


h1 {
    font-family: 'Poppins', sans-serif, 'arial';
    font-weight: 600;
    font-size: 72px;
    color: white;
    text-align: center;
}

h4 {
    font-family: 'Roboto', sans-serif, 'arial';
    font-weight: 400;
    font-size: 20px;
    color: #9b9b9b;
    line-height: 1.5;
}

/* ///// inputs /////*/

input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
    font-size: 0.75em;
    color: #999;
    top: -5px;
    -webkit-transition: all 0.225s ease;
    transition: all 0.225s ease;
}

.styled-input {
    float: left;
    width: 293px;
    margin: 1rem 0;
    position: relative;
    border-radius: 4px;
}

@media only screen and (max-width: 768px){
    .styled-input {
        width:100%;
    }
}

.styled-input label {
    color: #999;
    padding: 1.3rem 30px 1rem 30px;
    position: absolute;
    top: 10px;
    left: 0;
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease;
    pointer-events: none;
}

.styled-input.wide { 
    width: 650px;
    max-width: 100%;
}

input,
textarea {
    padding: 30px;
    border: 0;
    width: 100%;
    font-size: 1rem;
    background-color: #2d2d2d;
    color: white;
    border-radius: 4px;
}

input:focus,
textarea:focus { outline: 0; }

input:focus ~ span,
textarea:focus ~ span {
    width: 100%;
    -webkit-transition: all 0.075s ease;
    transition: all 0.075s ease;
}

textarea {
    width: 100%;
    min-height: 15em;
}

.input-container {
    width: 650px;
    max-width: 100%;
    margin: 20px auto 25px auto;
}

.submit-btn {
   
    padding: 7px 35px;
    border-radius: 60px;
    display: inline-block;
    background-color: #155724;;
    color: white;
    text-align: center;
    font-size: 18px;
    cursor: pointer;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.06),
              0 2px 10px 0 rgba(0,0,0,0.07);
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease;
}

.submit-btn:hover {
    transform: translateY(1px);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,0.10),
              0 1px 1px 0 rgba(0,0,0,0.09);
}

@media (max-width: 768px) {
    .submit-btn {
        width:100%;
        float: none;
        text-align:center;
    }
}

input[type=checkbox] + label {
  color: #ccc;
  font-style: italic;
} 

input[type=checkbox]:checked + label {
  color: #f00;
  font-style: normal;
}
        </style>
    </head>
<body>
    <?php include"header.php";?>
<div class="container">
	<div class="row">
			<h1>contact us</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">We'd love to hear from you!</h4>
	</div>
	<form method="POST" action="add.php" enctype="multipart/form-data">
    <div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" name="Name" required />
					<label>Name</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" name="Category" required />
					<label>Category</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="file" name="Image" required />
					<label></label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea name="Post" required></textarea>
					<label>Post</label>
				</div>
			</div>
			<div class="col-xs-12">
            <input class="btn btn-primary" type="submit" name="submit" value="Submit" >
			</div>
	</div></form>
</div>
<?php include"footer.php";?>
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
      // echo "insert data successful";
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  ?>

</body>
</html>
