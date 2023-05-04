<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title> 
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>     
</head>    
<style>

body  
{  
    margin: 0;  
    padding: 0;  
    background-color:rgba(20,54,1,0.6);  
    font-family: 'Arial';  
}  
.login{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
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
#Uname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
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
    <h2><b><i> DONOR LOGIN FOR FUNDING IS HELPING ORGANIZATION</i></b></h2><br>    
    <div class="login">    
    <form id="login" method="POST" action="Login1.php" >   
        <label><b>User Name  OR Gmail   
        </b>    
        </label>    
        <input type="text" name="Gmail" id="Uname" placeholder="Username" required >    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Passowrd" id="Pass" placeholder="Password" required >    
        <br><br>    
        <input type="submit" name="login" id="log" value="Log In Here" >       
        <br><br>    
        <!-- <input type="checkbox" id="check">    
        <span>Remember me</span>  -->   
        <br><br>    
       <p>Create an account <a href="register.php"><b>Sing Up</b></a> </p>

    </form>     
</div>    
</body>    
</html>  


<?php
	session_start();
 
	include'connection.php';
 
	if(ISSET($_POST['login'])){
		if($_POST['Gmail'] != "" || $_POST['Passowrd'] != ""){
			$gmail = $_POST['Gmail'];
			$passowrd = $_POST['Passowrd'];
			$sql = "SELECT * FROM `register` WHERE `Gmail`=? AND `Passowrd`=? ";
			$query = $db->prepare($sql);
			$query->execute(array($gmail,$passowrd));
			$row = $query->rowCount();
	        $fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['Gmail'] = $fetch['register'];
                $_SESSION['Email']=$gmail; 
               
                echo "<script>
                alert('Login sucessful');
                window.location.href='index.php';
            </script>";
				
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'Login1.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'Login1.php'</script>
			";
		}
	}
?>
