
<?php 
session_start();
$Email=$_SESSION['Email'] ;


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Donate</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

.container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
  background: linear-gradient(90deg, #2ecc71 60%, #27ae60 40.1%);
}

.container form{
  padding:20px;
  width:700px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col .title{
  font-size: 20px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}

.container form .row .col .inputBox input{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
}

.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn{
  width: 100%;
  padding:12px;
  font-size: 17px;
  background: #27ae60;
  color:#fff;
  margin-top: 5px;
  cursor: pointer;
}

.container form .submit-btn:hover{
  background: #2ecc71;
}
    </style>

</head>
<body>
    

<div class="container">
<?php include 'header.php';?>

    <form method="POST" action="l.php" enctype="multipart/form-data">
        <br><br>
        
<h2 class="title">Donation Form</h2>
<br><br>
        <div class="row">

            <div class="col">

                <h3 class="title">Donor's Information </h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="Name"placeholder="john deo" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="Email"  value="<?php  echo $Email;?>" readonly >
                </div>
                <div class="inputBox">
                    <span>Phone no :</span>
                    <input type="text" name="Phone" placeholder="09-----" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="City" placeholder="mumbai" required >
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="image/images.jpg" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="Nameoncard" placeholder="mr. john deo" required >
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="Cardno" placeholder="1111-2222-3333-4444" required >
                </div>
                

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="Exp" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="CVC" placeholder="1234">
                    </div>
                </div>
                <div class="inputBox">
                    <span>Amount :</span>
                    <input type="text" name="Amount"placeholder="$0">
                </div>
            <div class="inputBox">
              <span>Tips :</span>
              <input type="text" name="Tip" value="$5">
            </div>

            </div>
    
        </div>

        <input type="submit" name="submit" value="proceed to checkout" class="submit-btn">

    </form>
</div>    

</body>
</html>
<?php
if (isset($_POST['submit'])){
    try {
        include("connection.php");
        $sql = "INSERT INTO donation(Name, Email,Phone,City,Nameoncard,Cardno,ExpY,CVC,Amount)
         VALUES(?,?,?,?,?,?,?,?,?)";
        $sq = $db->prepare($sql);

        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $city = $_POST['City'];
        $nameoncard = $_POST['Nameoncard'];
        $cardno = $_POST['Cardno'];
        $expy = $_POST['ExpY'];
        $cvc = $_POST['CVC'];
        $amount = $_POST['Amount'];

        if ($sq->execute(array($name, $email, $phone,$city,$nameoncard, $cardno ,$expy,$cvc,$amount ))) {
        }
        echo "<script>
        alert('Donation sucessful');
        window.location.href='l.php';
    </script>";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }}

    
    
?>
