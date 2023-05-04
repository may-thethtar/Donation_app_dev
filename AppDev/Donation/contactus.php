
<?php
session_start();
$Email=$_SESSION['Email'] ;


try {
    $db=new PDO("mysql:hostname='localhost';dbname=Donation","root","");
 // echo "connection sucessfully";
   $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);//to except the error for the connection 
  
} catch (PDOException $e) {
    echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}

include'header.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Funding is Helping World</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!--google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!--Animate.css--->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
  <style>
    *{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
body{
    font-family: 'Roboto', sans-serif;
}
.nav-bg{
    background: rgba(20,54,1,0.6);
}
.navbar-nav .nav-link{
    color:#fff!important;
}
.navbar-toggler{
    outline:none!important;
}
/*---Hero---*/

/*======About Us=========*/
#contact {
  background-color: #6a9ac4;
  display: flex;
  justify-content: center;
  align-items: center;
}

.contact-box {
  width: clamp(100px, 90%, 1000px);
  margin: 80px 50px;
  display: flex;
  flex-wrap: wrap;
}

.contact-links, .contact-form-wrapper {
  width: 50%;
  padding: 8% 5% 10% 5%;
}


.contact-links {
  background-color: #1f2e43;
  background:
    radial-gradient(
      circle at 55% 92%, #426691 0 12%, transparent 12.2%
    ), 
    radial-gradient(
      circle at 94% 72%, #426691 0 10%, transparent 10.2%
    ), 
    radial-gradient(
      circle at 20% max(78%, 350px), #263a53 0 7%, transparent 7.2%
    ), 
    radial-gradient(
      circle at 0% 0%, #263a53 0 40%, transparent 40.2%
    ), 
    #1f2e43;
  border-radius: 10px 0 0 10px;
}

.contact-form-wrapper {
  background-color: #ffffff8f;
  border-radius: 0 10px 10px 0;
}

@media only screen and (max-width: 800px) {
  .contact-links, .contact-form-wrapper {
    width: 100%;
  }
  
  .contact-links {
    border-radius: 10px 10px 0 0;
  }
  
  .contact-form-wrapper {
    border-radius: 0 0 10px 10px;
  }
}

@media only screen and (max-width: 400px) {
  .contact-box {
    width: 95%;
    margin: 8% 5%;
  }
}

h2 {
  font-family: 'Arimo', sans-serif;
  color: #fff;
  font-size: clamp(30px, 6vw, 60px);
  letter-spacing: 2px;
  text-align: center;
  transform: scale(.95, 1);
}

.links {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 50px;
}

.link {
  margin: 10px;
  cursor: pointer;
}

img {
  width: 45px;
  height: 45px;
  filter: 
    hue-rotate(220deg)
    drop-shadow(2px 4px 4px #0006);
  transition: 0.2s;
  user-select: none;
}

img:hover {
  transform: scale(1.1, 1.1);
}

img:active {
  transform: scale(1.1, 1.1);
  filter: 
    hue-rotate(220deg)
    drop-shadow(2px 4px 4px #222)
    sepia(0.3);
}

.form-item {
  position: relative;
}

label, input, textarea {
  font-family: 'Poppins', sans-serif;
}

label {
  position: absolute;
  top: 10px;
  left: 2%;
  color: #999;
  font-size: clamp(14px, 1.5vw, 18px);
  pointer-events: none;
  user-select: none;
}

input, textarea {
  width: 100%;
  outline: 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 20px;
  padding: 12px;
  font-size: clamp(15px, 1.5vw, 18px);
}

input:focus+label, 
input:valid+label, 
textarea:focus+label, 
textarea:valid+label {
  font-size: clamp(13px, 1.3vw, 16px);
  color: #777;
  top: -20px;
  transition: all .225s ease;
}

.submit-btn {
  background-color: #b3f19b;
  filter: drop-shadow(2px 2px 3px #0003);
  color: #fff;
  font-family: "Poppins",sans-serif;
  font-size: clamp(16px, 1.6vw, 18px);
  display: block;
  padding: 12px 20px;
  margin: 2px auto;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  user-select: none;
  transition: 0.2s;
}

.submit-btn:hover {
  transform: scale(1.1, 1.1);
}

.submit-btn:active {
  transform: scale(1.1, 1.1);
  filter: sepia(0.5);
}

@media only screen and (max-width: 800px) {
  h2 {
    font-size: clamp(40px, 10vw, 60px);
  }
}

@media only screen and (max-width: 400px) {
  h2 {
    font-size: clamp(30px, 12vw, 60px);
  }
  
  .links {
    padding-top: 30px;
  }
  
  img {
    width: 38px;
    height: 38px;
  }
}

/*======End of About Us=========*/

/*========End of the Donation Section======*/
.footer{
    background:linear-gradient(rgba(162,247,106,0.6),rgba(0,59,37,0.4));
    padding: 0 0 30px 0;
    color: #000;
    font-size: 15px;
}
.footer .footer-top{
    padding: 60px 0 30px 0;
}
.footer .footer-top .footer-des{
    margin-top: -90px;
    margin-bottom: 15px;
    background:#053001;
    color:#fff;
    border-top: 4px solid #b3f19b;
    text-align: center;
    padding:30px 20px;
}
.footer .footer-top .footer-des h3{
    font-size:24px;
    margin: 0 0 2px 0;
    padding: 2px 0 2px 0;
    line-height: 1;
    font-weight: bold;
}
.footer .footer-top .footer-des p{
    font-size:14px;
    line-height: 24px;
    margin-bottom: 0;
}
.footer .footer-top .social-links a{
    font-size: 18px;
    display: inline-block;
    background: #b3f19b;
    color:#053001;
    line-height:1;
    padding:8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align:center;
    width: 36px;
    height:36px;
    transition: 0.3s;
}
.footer .footer-top .social-links a:hover{
    background: #053001;
    color: #fff;
    text-decoration: none;
}
.footer .footer-top h4{
    font-size:16px;
    font-weight:bold;
    color: #000;
    position:relative;
    padding-bottom: 12px;
}
.footer .footer-top .footer-links{
    margin-bottom: 30px;
}
.footer .footer-top .footer-links ul{
    list-style: none;
    padding: 0;
    margin:0;
}
.footer .footer-top .footer-links ul i{
    padding-right: 2px;
    color:#000;
    font-size: 18px;
    line-height: 1;
}
.footer .footer-top .footer-links ul li{
    padding: 10px 0;
    display: flex;
    align-items:center;
}
.footer .footer-top .footer-links ul li:first-child{
    padding-top:0;
}
.footer .footer-top .footer-links ul a{
    color:#000;
    transition:0.3s;
    display: inline-block;
    line-height: 1;
}
.footer .footer-top .footer-links ul a:hover{
    color: #053001;
}
.footer .footer-top .footer-newsletter form{
    margin-top:30px;
    background: #fff;
    padding: 6px 10px;
    position: relative;
    border-radius: 4;
}
.footer .footer-top .footer-newsletter form input[type="email"]{
    border:0;
    padding: 4px;
    width: calc(100% - 110px);
}
.footer .footer-top .footer-newsletter form input[type="submit"]{
    position: absolute;
    top:0;
    right:0;
    bottom:0;
    border:0;
    background: none;
    font-size:16px;
    padding: 0 20px;
    background: #053001;
    color:#fff;
    transition: 0.3s;
    border-radius:4;
}
.footer .footer-top .footer-newsletter form input[type="submit"]:hover{
    background: #b3f19b;
    color:#053001;
}
  </style>
  </head>
  <body>
    
      <section class="mt-5">
          <div class="container">
          <div class="contact-box">
    <div class="contact-links">
      <h2>CONTACT</h2>
      <div class="links">
        <div class="link">
          <a><img src="https://i.postimg.cc/m2mg2Hjm/linkedin.png" alt="linkedin"></a>
        </div>
        <div class="link">
          <a><img src="https://i.postimg.cc/YCV2QBJg/github.png" alt="github"></a>
        </div>
        <div class="link">
          <a><img src="https://i.postimg.cc/W4Znvrry/codepen.png" alt="codepen"></a>
        </div>
        <div class="link">
          <a><img src="https://i.postimg.cc/NjLfyjPB/email.png" alt="email"></a>
        </div>
      </div>
    </div>
    <div class="contact-form-wrapper">
    <form method="POST" action="contactus.php" enctype="multipart/form-data">
        <div class="form-item">
          <input type="text" name="Name" required>
          <label>Name:</label>
        </div>
        <br>
        <div class="form-item">
          <input type="text" name="Gmail" value="<?php  echo $Email;?>">
         
        </div>
        <br>
        <div class="form-item">
          <input type="text" name="Phone"required >
          <label>Phone Number:</label>
        </div>
        <br>
        <div class="form-item">
          <textarea class="" name="Recommend" required></textarea>
          <label>Message:</label>
        </div>
        <br>
        <input class="btn-lrg submit-btn" type="submit" name="submit"  width=50%>  
      </form>
    </div>
  </div>
          </div>
      </section>
<?php include"footer.php"?>
  </body>
</html>
<?php
if (isset($_POST['submit'])){
    try {
        include("connection.php");
        $sql = "INSERT INTO Contact(Name, Gmail, Phone, Recommend)
         VALUES(?,?,?,?)";
        $sq = $db->prepare($sql);

        $name = $_POST['Name'];
        $gmail = $_POST['Gmail'];
        $phone = $_POST['Phone'];
        $recommend = $_POST['Recommend'];

        if ($sq->execute(array($name, $gmail, $phone, $recommend))) {
          echo "<script>
          alert('Suggestion is  sucessful');
          window.location.href='contactus.php';
      </script>";
        }
    
    } catch (PDOException $e) {
        echo $e->getMessage();
    }}


?>