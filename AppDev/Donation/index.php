<?php include'header.php'?>
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
/*---Hero---*/
#hero{
    width:100%;
    height: 100vh;
    overflow:hidden;
    position: relative;
}
#hero:after{
    content:'';
    position:absolute;
    left:50%;
    top:0;
    width:130%;
    height:95%;
    background:linear-gradient(to right,rgba(110,155,39,0.6),rgba(20,54,1,0.4)),url("https://i.postimg.cc/9XN8dmP6/hero.jpg")center top no-repeat;/*image-size 1920H 1080W*/
    z-index:0;
    border-radius: 0 0 50% 50%;
    transform:translateX(-50%) rotate(0deg);
}
#hero:before{
    content:'';
    position: absolute;
    left:50%;
    top:0;
    width:130%;
    height:96%;
    background:rgba(110,155,39,0.8);
    opacity:0.3;
    z-index:0;
    border-radius:0 0 50% 50%;
    transform: translateX(-50%)translateY(18px)rotate(2deg);
}
#hero .carousel-container{
    display:flex;
    justify-content: center;
    align-items:center;
    flex-direction:column;
    text-align:center;
    bottom:0;
    top:0;
    left:0;
    right:0;
}
#hero h2{
    color:#fff;
    margin-bottom:30px;
    font-size:48px;
    font-weight:bold;
}
#hero p{
    width:80%;
    animation-delay:0.4s;
    margin:0 auto 30px auto;
    color:#fff;
}
#hero .carousel-control-prev, 
#hero .carousel-control-next{
    width:10%;
}
#hero .carousel-control-next-icon,
#hero .carousel-control-prev-icon{
    background:none;
    font-size:48px;
    line-height:1;
    width:auto;
    height: auto;
}
#hero .hero-btn{
    font-weight:bold;
    font-size:16px;
    letter-spacing:1px;
    display:inline-block;
    padding:12px 32px;
    border-radius:50px;
    transition:0.5s;
    line-height:1;
    margin:10px;
    color:#fff;
    animation-delay:0.5s;
    border:2px solid #9ef596;
}
#hero .hero-btn:hover{
    background:#0a6801;
    color:#fff;
    text-decoration:none;
}
@media(min-width:1024px){
    #hero p{
        width:60%;
    }
    #hero .carousel-control-prev,
    #hero .carousel-control-next{
        width:5%;
    }
}
@media(max-width:768px){
    #hero h2{
        font-size:28px;
    }
    #hero:after{
        width:180%;
        height:95%;
        border-radius:0 0 50% 50%;
        transform:translateX(-50%)rotate(0deg);
    }
    #hero:before{
        top:0;
        width:180%;
        height:94%;
        border-radius: 0 0 50% 50%;
        transform: translateX(-50%)translateY(20px)rotate(4deg);
    }
}
@media(max-width:575px){
    #hero:after{
        left:40%;
        top:0;
        width:200%;
        height:95%;
        border-radius: 0 0 50% 50%;
        transform: translateX(-50%)rotate(0deg);
    }
    #hero:before{
        left:50%;
        top:0;
        width:200%;
        height:94%;
        border-radius: 0 0 50% 50%;
        transform: translateX(-50%)translateY(20px)rotate(4deg);

    }
}
/*--End of Hero---*/
/*======About Us=========*/

/*======End of About Us=========*/
/*========Stories========*/
.story-box{
    padding:15px;
    background:#c6f8bc;
    margin-bottom:30px;
    position:relative;
}
.story-icon{
    width:90px;
    height:90px;
    text-align:center;
    line-height: 90px;
}
.story-icon i{
    font-size:50px;
    color:#fff;
    mix-blend-mode: difference;
}

.story-box h2{
    font-size:24px;
    font-weight:bold;
    color:#fff;
    mix-blend-mode: difference;
}
.story-box p{
    font-size: 16px;
    font-weight:light;
    color:#fff;
    mix-blend-mode: difference;
}

.overlay{
    margin:20px auto;
    border:none;
    padding:10px 44px;
    font-size:20px;
    position:relative;
    display:inline-block;
}
.overlay:before{
    transition:all 0.85s cubic-bezier(0.68,-0.55,0.265,1.55);
    content:'';
    width:50%;
    height: 100%;
    background: #053001;
    position: absolute;
    top:0;
    left:0;
    border-radius:10px 0px 0px 10px;
    
}
.overlay:hover:before{
    background:#053001;
    width:100%;
    border-radius:10px;
}
/*========End of the Stories========*/
/*============Projects Section=======*/
.project-container{
    background: #136d01;
    position: relative;
    overflow: hidden;
}
.donation{
    background:#7ff767;
    color:black;
    padding:3px 3.5px;
    position: absolute;
    right:0;
    top:70%;
    transform: translateX(110%);
    transition: all 1s ease-in-out;
}
.donation:hover{
    color:#000;
}
.project-container:hover .donation{
    transform: translateX(0%);
}
.outline{
    display: inline-block;
    vertical-align:middle;
    transform:perspective(1px)translateZ(0);
    box-shadow: 0 0 1px rgba(0,0,0,0);
    position: relative;
}
.outline:before{
    content:'';
    position:absolute;
    border: #7ff677 solid 4px;
    top:4px;
    left: 4px;
    right:4px;
    bottom:4px;
    opacity:0;
    transition-duration: 0.3s;
    transition-property: opacity;

}
.outline:hover:before,
.outline:focus:before,
.outline:active:before{
    opacity:1;
}
.grow{
    display: inline-block;
    vertical-align: middle;
    transform: perspective(1px) translateZ(0);
    box-shadow:0 0 10px #7ff767;
    transition-duration:0.3s;
    transition-property: box-shadow, transform;
}
.grow:hover,
.grow:focus,
.grow:active{
    box-shadow: 0 10px 10px 5px #7ff767;
    transform: scale(1.1);
}
/*====end of Projects Section======*/
/*====Team Section======*/

/*==========End of the Finished projects======*/
/*========== Donation Section======*/
.donation-form .input-field .input-group{
    width: 100%;
    border:1px solid #053001;
    border-radius: 7px;
    padding: 5px 10px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.16);
}
.donation-form .input-field .input-group .input-group-text{
    font-size: 16px;
    background: transparent;
    border:0;
    font-weight: bold;
}
.donation-form .input-field .input-group .form-control{
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    border-bottom: 0;
    border-top:0;
    border-radius: 0;
    border-right: 0;
    padding: 0 0 0 25px;
    height: 50px;
    font-size: 16px;
    color:#000;
}
.donation-form .input-field .input-group .form-control:placeholder{
    font-size: 16px;
    color: #7a7b7c;
    font-weight: 400;
}
.donation-form .input-field .input-group .form-control:focus{
    outline: none;
    box-shadow:none;
}
.donation-form .amount .need{
    box-shadow: 0  3px 6px rgba(0,0,0,0.16);
    padding: 18px 27px;
    border-radius: 7px;
    border: 1px solid #3cc78f;
    display: block;
    overflow: hidden;
}
@media (max-width: 767px){
    .donation-form .amount .need{
        display: block !important;
        margin-top: 15px;
    }
}
.donation-form .amount .need .select h5{
    font-size: 16px;
    color: #7a7b7c;
    margin-bottom: 0;
}
.donation-form .amount .need .fund label{
    font-size: 16px;
    font-weight: 400;
    color:#7a7b7c;
    margin-bottom: 0;
}

@media(max-width: 767px){
    .donation-form .amount .need .fund{
        width: 33.33%;
        float:left;
        margin-top: 15px;
    }
}
.donation-btn{
    margin-top: 50px;
}
.btn-don{
    background: #053001;
    color: #fff;
    border-radius: 50px;
}
.btn-don:hover{
    color: #9ef596;
}
/*==========End of the Donation Section======*/
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
      

      <!---End of Navbar-->
      <!--Hero Section-->
      <section id="hero" class="d-flex justify-content-center align-items-center">
          <div id="heroCarousel"class="container carousel carousel-fade"
          data-ride="carousel">
        <!--Slide-1-->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__backInDown">
                    Let's<span>Help</span>
                </h2>
                <p class="animate__animated animate__fadeInUp">
                We Connect Givers with Worthy Causes, Helping Fund the Missions of Trusted Nonprofits. Mite.org is designed for charitable donors and people who give to charity. 100% to the field. 100% given has an impact. Give your mite. Support Global Nonprofits. Every Project Proved.
                </p>
                <a href="aboutus.php"class="btn hero-btn animate__animated animate__backInUp">
                    Read More
                </a>
            </div>
        </div>
        <!--End of Slide-1-->
        <!--Slide-1-->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__backInDown">
                    Let's  <span>Save </span>
                </h2>
                <p class="animate__animated animate__fadeInUp">
                How do they think we can save the planet? Whom do they see as the main culprit? What can ordinary people do to keep our Earth green and comfortable for living on?
                </p>
                <a href="aboutus.php"class="btn hero-btn animate__animated animate__backInUp">
                    Read More
                </a>
            </div>
        </div>
        <!--End of Slide-1-->
        <!--Slide-1-->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__backInDown">
                  Let's <span>Donate</span>
                </h2>
                <p class="animate__animated animate__fadeInUp">
                How much would you like to donate? As a contributor to Helpers Social Development Foundation we make sure your donation goes directly to supporting our cause. Your tax-deductible donation is greatly appreciated! Thank you for your generosity! 
                </p>
                <a href="aboutus.php"class="btn hero-btn animate__animated animate__backInUp">
                    Read More
                </a>
            </div>
        </div>
        <!--End of Slide-1-->
        <a class="carousel-control-prev"href="#heroCarousel"role="button"
        data-slide="prev">
        <span class="carousel-control-prev-icon fas fa-chevron-left"aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    
    </a>
    <a class="carousel-control-next"href="#heroCarousel"role="button"
        data-slide="next">
        <span class="carousel-control-next-icon fas fa-chevron-right"aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    
    </a>
        
        </div>
      </section>

      <!--end of hero Section-->

      <!--About us-->
      
      <!--End About us-->
      <!---Stories Section-->
      <section class="mt-3">
          <div class="stories">
              <div class="container">
                  <div class="section-title text-center">
                      <h3>Stories</h3>
                     
                  </div>
                  <!----->
                  <div class="row">
                      <div class="col-md-4">
                          <div class="story-box overlay shadow">
                              <div class="story-icon">
                                  <i class="fas fa-ambulance"></i>
                              </div>
                              <h2>Health</h2>
                              <p>Professional health (Doctors and Nurses) and Dental care provider's expertise is needed overseas. Health care volunteers have the most noticeable and largest impact abroad. Many developing communities lack access to quality healthcare, or their community health center lacks equipment and trained staff.</p>
                          </div>
                      </div>
                      <!----->
                      <div class="col-md-4">
                        <div class="story-box overlay shadow">
                            <div class="story-icon">
                                <i class="fas fa-hand-holding-water"></i>
                            </div>
                            <h2>Plants</h2>
                            <p>Plants are incredibly important for providing habitats for a huge number of different species. A good example of this is the English oak.

This species supports more life than any other native tree. It provides habitat for hundreds of insects and food for birds and mammals such as deer and badger. It supports fungi, lichens and even bats.</p>
                        </div>
                    </div>
                    <!----->
                    <div class="col-md-4">
                        <div class="story-box overlay shadow">
                            <div class="story-icon">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <h2>Clean Water </h2>
                            <p>The Clean Water program provides water wells and filters for those who would otherwise be drinking dirty, unhealthy water. A clean water well in the community allows people to pursue education, agriculture, and work opportunities rather than spending hours searching for a water source.</p>
                        </div>
                    </div>
                    <!----->
                  </div>
              </div>
          </div>
      </section>
 <!--- End of Stories Section-->


<!-- Team Section-->

<!---End of finished projects Section-->
<!---Donation Section-->
<section class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-55">
                    <h3>Make a Donation</h3>
                </div>
            </div>
        </div>
        <!---->
        <div class="row justify-content-center">
            <div class="col-lg-6">
            <form class="donation-form">
               <div class="row align-items-center">
                <div class="col-md-4">
             <div class="amount">
           <div class="input-field">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">$</span></div>
                             
            <input type="text" class="form-control"placeholder="10,000"
            aria-label="Username">
                     </div>
                                </div>
                            </div>
                        </div>
                        <!----->
                        <div class="col-md-8">
                         <div class="amount">
                       <div class="need d-flex align-items-center
                        justify-content-between">
                        <div class="select">
                            <h5>Select Amount</h5>
                        </div>
                        <div class="funds">
                            <input type="radio"name="radio-group">
                            <label for="fund-1">10</label>
                        </div>
                        <div class="funds">
                            <input type="radio"name="radio-group">
                            <label for="fund-2">50</label>
                        </div>
                        <div class="funds">
                            <input type="radio"name="radio-group">
                            <label for="Other">Other</label>
                        </div>
                    
                    
                    </div>
                       
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <div class="donation-btn text-center">
                    <a href="l.php"class="btn btn-don">Donate Now</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---End of Donation section Section-->
<?php include"footer.php"?>


























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>