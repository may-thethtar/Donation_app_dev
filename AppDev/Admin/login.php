<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>      
</head>    
<style>

body  {
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
    <h2><b><i>ADMIN LOGIN FOR FUNDING IS HELPING ORGANIZATION</i></b></h2><br>    
    <div class="login">    
    <form id="login" method="POST" action="checklogin.php" >   
    <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="name" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="pwd" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="submit" name="submit" id="log" value="Log In Here" >       
        <br><br>    
        <!-- <input type="checkbox" id="check">    
        <span>Remember me</span>  -->   
        <br><br>    
        <a href="login.php">Forgot Password</a>    
       

    </form>     
</div>    
</body>    
</html>  


