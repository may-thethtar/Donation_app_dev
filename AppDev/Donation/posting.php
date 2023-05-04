<?php

include 'connection.php';
include 'header.php';
$sql =$db->prepare("SELECT * FROM posting ");
$sql->execute();
?>
<html>
	<head>
	<title>HOME PAGE FOR JUb</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!--   <style type="text/css"> -->
<style>
header{
background:green;}
body{
background:greenyellow;}
h1 {text-align: center;}
.search{text-align: right;
		padding-right: 50px;}

.container
{
    background: #b3f19b;

}
</style>
	</head>
	<body>
	
	


<br><br>

	   <div class="container" >
	   <h2 align="center">Fundraising Postings <small class="text-muted"> Of Funding And Helping </small></h2>
<div class="text-right">
	<form method="post" action="search1P.php">
	<input type="text" name="search" required/>
	<input type="submit" value="Search">
	</form>
</div>
	       <div class="row" class="p-3 mb-2 bg-secondary text-white" style="--bs-bg-opacity: .5;">
	           <?php 
	               while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
	                   extract($row);	               
	           ?>
	           
	               <div class="col-md-6">
	               <br>
	               <br>
	              
	                   <form method="post" action="donation.php" align="center">
	                   <img  src="<?php echo "image/".$Image; ?>" width="250" height="200"class="rounded-bottom"><br><br>
	                   Product Name: <?php echo $Name;?><br>
	                   Category :<?php echo $Category;?><br>
	                   <br>
	                   <!-- <button class="btn btn-primary mb1 bg-black" name="view">View Item</button> -->
	                   <a class="btn btn-primary mb1 bg-black" name="view" href="eachview.php?eid=<?php echo $IID ;?>"> View Item  </a>
	                  <!--  <input class="btn btn-primary mb1 bg-black" type="submit" name="" value="Add to Cart"> -->
	                   <input type="hidden" name="name" value="<?php echo $Name;?>"> 
	                   <input type="hidden" name="price" value="<?php echo $Category;?>"> 
	                   <a class="btn btn-primary mb1 bg-black" name="view" href="l.php"  ;?> Donate </a>
	                   
	                   </form>
	                   <br>
	               </div>
	           <?php } ?>
	       </div> 
	       <br><br>
	   </div>
	   <br>
	   <?php 
	   include 'footer.php';
	   ?>
	</body>
</html>