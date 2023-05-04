<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Footer with Social icons</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <style>
    
/*FOOTER*/

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
<footer class="footer mt-5">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-des">
                        <h3>Funding and Helping</h3>
                        <p class="pb-3">
                            <em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias.</em>
                        </p>
                        <p>Pyay Street<br>
                        SP 12345, salin <br><br><strong>
                            Phone;
                        </strong>
                        +95 951531676<br>
                        <strong>
                            Email:
                        </strong>
                        Fundhelp@gmail.com<br>
                    
                    </p>
                    <div class="social-links mt-3">
                        <a href=""><i class="fab fa-twitter">

                        </i></a>
                        <a href=""><i class="fab fa-facebook">
                            
                        </i></a>
                        <a href=""><i class="fab fa-instagram">
                            
                        </i></a>
                        <a href=""><i class="fab fa-linkedin">
                            
                        </i></a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>About Us</h4>
                    <ul>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Home</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">About Us</a>

                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful links</h4>
                    <ul>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Contact Us</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Team</a>

                            
    </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our News Letters</h4>
                   
                    <form>
                        <input type="email" name="email">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
