<!DOCTYPE html>
<html>
  <head> 
<title>Search postings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
  <body>
    <!-- (A) SEARCH FORM -->
   

    <?php
    include "header.php";?>
    <br><br><br><br>
    <div class="text-right">
    <form method="post" action="search1P.php">
   
    <input type="text" name="search" required/>
    <input type="submit" value="Search"/>
  </form>
    </div>
    <br>
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
      <th width=20%  >Name</th><!-- for heading bold/why we should th cause not to show every time while looping  -->
      <th width=10%  > Category</th>
      <th width=20%  > Post</th>
      <th width=5%  >Action </th>
  <?php
    // (B) PROCESS SEARCH WHEN FORM SUBMITTED
    if (isset($_POST["search"])) {
      // (B1) SEARCH FOR USERS
      require "search2.php";

      // (B2) DISPLAY RESULTS
      if (count($results) > 0) { foreach ($results as $r) {?>
      
      
      <tr>
      
       <td  > <?php    printf("<div>%s ", $r["Name"]);?> </td><!-- this all varibale are the colum of the database -->
       <td>  <?php   printf("<div>%s ", $r["Category"]);?></td>
       <td><?php printf("<div>%s ", $r["Post"]); ?> </td>
       <td><a href="l.php"> Donation </a></td>
     
       </tr>
     <?php }?>
      
    </table>
      </div></div>
        </div></div>
    </div>
      
       <?php
      }} else { echo "No results found"; }
    
    ?>
  </body>
</html>
