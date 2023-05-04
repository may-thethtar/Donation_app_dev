<?php

if(isset($_POST['submit']))
{
    $uid=$_POST['name'];
    $pwd=$_POST['pwd'];
   
}
if($uid=="admin" && $pwd=="123")
{
	echo "
				<script>alert('Login Sucessfully')</script>
				<script>window.location = 'viewP.php'</script>
			";
    
}

else {
	echo "
				<script>alert('Try Agin!')</script>
				<script>window.location = 'login.php'</script>
			";
}
?>