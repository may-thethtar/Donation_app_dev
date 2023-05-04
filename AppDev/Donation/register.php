<?php
//include"header.php"?>

<html>
    <head>
    <title>Register Form</title>      
</head>    
<style>
body  
{  
    margin: 0;  
    padding: 0;  
    background-color:rgba(20,54,1,0.6);  
    font-family: 'Arial';  
}  
.register{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 50px;  
        background:#053001;  
        border-radius: 15px ;  
          
}  
h2{  
    text-align: center;  
    color: black;  
    padding: 20px;  
}  
label{  
    color: #08ffd1;  
    font-size: 17px;  
}  
#Fname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#Lname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;   
}  
#Gmail{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
  
  
}  
#Phone{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
  
  
}  
#Pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
  
  
}  

a{  
    float: right;  
    background-color: grey;  
}  


</style>

<body>    
   
    <div class="register">    
    <form method="POST" action="register.php" enctype="multipart/form-data" >
                <h2 style="text-align: center" ><b><i>"Registeration "</i></b> <br>
             <small class="text-muted"> For Funding And Helping </small></h2>
                
                <label>First Name</label> 
					<input name="Firstname" type="text" id="Fname" required />
                    <br><br>
                <label>Last Name</label> 
					<input name="Lastname" type="text" id="Lname"  required />
                    <br><br>
                <label>Gmial Or Email</label> 
					<input type="gamil" name="Gmail" id="Gmail" required />
                    <br><br>
                <label>Phone Number</label> 
					<input type="text" name="Phone"id="Phone" required />
                    <br><br>
                <label>Password</label><br> 
					<input name="Passowrd" type="password" id="Pass"required />
                    <br><br>
				<input class="btn-lrg submit-btn" type="submit" name="submit" id="log"  width=50%>
                <br><br>
                <br><br>    
       <p>Already have an account<a href="login1.php"><b>Sing In</b></a> </p> 
	</form>
</div>    
</body> 

      <br>
      <br>
     <?php 
    // include 'footer.php';
     ?>
    
</html>
<?php
session_start();
if (isset($_POST['submit'])){
    try {
        include("connection.php");
        $sql = "INSERT INTO register(Firstname,Lastname, Gmail, Phone, Passowrd)
         VALUES(?,?,?,?,?)";
        $sq = $db->prepare($sql);

        $fname = $_POST['Firstname'];
        $lname = $_POST['Lastname'];
        $gmail = $_POST['Gmail'];
        $phone = $_POST['Phone'];
        $passowrd = $_POST['Passowrd'];

        $query = $db->prepare($sql);
			$query->execute(array($fname,$lname,$gmail,$phone,$password));
			$row = $query->rowCount();
	        $fetch = $query->fetch();
            

        if ($sq->execute(array($fname, $lname,$gmail, $phone, $passowrd))) {
        }
       
        $_SESSION['gmail']=$gamil;
        echo "<script>
        alert('Registeration sucessful');
        window.location.href='index.php';
    </script>";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }}


?>