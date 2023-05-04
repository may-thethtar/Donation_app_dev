<?php
include 'header.php'?>
<html>
    <head>
        <tile></tile>
        <style>
            .team{
    background: #fff;
    padding:60px 0 30px 0;
}
.team .team-1{
    text-align:center;
    margin-bottom:80px;
    position:relative;
}
.team .team-1 .pic{
    border-radius:4px;
    overflow:hidden;
}
.team .team-1 img{
    transition:all ease-in-out 0.4s;
}
.team .team-1:hover img{
    transform:scale(1.1);
}
.team .team-1 .team-info{
    position: absolute;
    bottom:-48px;
    left:20px;
    right:20px;
    background: linear-gradient(360deg,#b3f19b 0%,rgba(187,240,152,0.9)35%,
    rgba(0,59,37,0.8)100%);
    padding: 15px 0;
    border-radius: 4px;
}
.team .team-1 h4{
    font-weight: bold;
    margin-bottom:10px;
    font-size:16px;
    color:#fff;
    position: relative;
    padding-bottom: 10px;
}
.team .team-1 h4:after{
    content:"";
    position: absolute;
    display:block;
    width:50px;
    height:1px;
    background: #1d3501;
    bottom:0;
    left: calc(50% - 25px);
}
.team .team-1 span{
    font-style:italic;
    display:block;
    font-size: 13px;
    color:#fff;
}
.team .team-1 .social{
    margin-top: 15px;
}
.team .team-1 .social a{
    transition: color 0.3s;
    color:#01290d;
}
.team .team-1 .social a:hover{
    color:#fff;
}
.team .team-1 .social i{
    font-size:16px;
    margin: 0 2px;
}
@media (max-width: 992px){
    .team .team-1{
        margin-bottom: 100px;
    }
}
/*====end of Team Section======*/
/*==========Finished projects======*/
.project-item{
    display: block;
    position: relative;
    overflow:hidden;
    max-width:530px;
    margin:auto auto 16px;
}
.project-item .text{
    display:flex;
    height: 100%;
    width:100%;
    background-color:rgba(38, 41, 39, 0.2);
    position: absolute;
    top:0;
    bottom:0;
    z-index:1;
}
.project-item .text .des{
    color:#fff;
    margin: auto 32px 32px;
}
.project-item .text .des h2{
    font-size:25px;
    text-transform: uppercase;
}
.project-item .text .des p{
    font-weight: light;
    font-size:20px;
}
@media(min-width:992px){
    .project-item{
        max-width: none;
        margin:0;
    }
    .project-item .text{
        transition: clip-path 0.25s ease-out, background-color 0.7s;
        clip-path:inset(0px);
    }
    .project-item .text .des{
        transition:opacity 0.25s;
        margin-left:80px;
        margin-right: 80px;
        margin-bottom: 80px;
    }
    .project-item img{
        transition: clip-path 0.25s ease-out;
        clip-path: inset(-1px);
    }
    .project-item:hover img{
        clip-path:inset(32px);
    }
    .project-item:hover .text{
        background-color: rgba(25,61,1,0.6);
    }
}
        </style>
    </head>
    <body>
    <section class="team">
    <div class="container">
        <div class="section-title">
            <h2 class="text-center">Our Creative Funding Team</h2><br>
            <p class="text-center"><b>We are a creative team that helps small and large business tell their story to the world. We aim to create something that is authentic and can be found nowhere else! </p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="team-1">
                    <div class="pic">
                        <img src="Team/3.png"class="img-fluid"alt="">
                    </div>
                    <div class="team-info">
                        <h4>John Doe</h4>
                        <span>Project Director</span>
                        <div class="social">
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="team-1">
                    <div class="pic">
                        <img src="Team/13.jpg"class="img-fluid"alt="">
                    </div>
                    <div class="team-info">
                        <h4>Alice Ron</h4>
                        <span>Project Manager</span>
                        <div class="social">
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="team-1">
                    <div class="pic">
                        <img src="Team/4.png"class="img-fluid"alt="">
                    </div>
                    <div class="team-info">
                        <h4>Kelly Shoua</h4>
                        <span>Project leader </span>
                        <div class="social">
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="team-1">
                    <div class="pic">
                        <img src="Team/5.png"class="img-fluid"alt="">
                    </div>
                    <div class="team-info">
                        <h4>Mark Wanson</h4>
                        <span>Senior Software Developer </span>
                        <div class="social">
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>
</section>
<section class="team">
    <div class="container">
        
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="team-1">
                    <div class="pic">
                        <img src="Team/14.jpg"class="img-fluid"alt="">
                    </div>
                    <div class="team-info">
                        <h4>Joshua </h4>
                        <span>Junior Software Developer</span>
                        <div class="social">
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="team-1">
                    <div class="pic">
                        <img src="Team/7.jpg"class="img-fluid"alt="">
                    </div>
                    <div class="team-info">
                        <h4>Mixle</h4>
                        <span>Junior Software Developer</span>
                        <div class="social">
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="team-1">
                    <div class="pic">
                        <img src="Team/11.png"class="img-fluid"alt="">
                    </div>
                    <div class="team-info">
                        <h4>Tony </h4>
                        <span>Business Analyst</span>
                        <div class="social">
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="team-1">
                    <div class="pic">
                        <img src="Team/10.jpg"class="img-fluid"alt="">
                    </div>
                    <div class="team-info">
                        <h4>Kilye</h4>
                        <span>Designer</span>
                        <div class="social">
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>
</section>
<!---End of Team Section-->
<!--Finished projects-->
<section>
    <div class="container">
        <div class="text-center">
            <h2 class="mb-5">Finished Projects</h2>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6">
                <a class="project-item"href="">
                    <span class="text">
                        <span class="des">
                            <h2>Plaings For  Save Our Earth </h2>
                        </span>
                    </span>
                    <img src="https://i.postimg.cc/W48CPL8X/p1.jpg"class="img-fluid"alt="">
                </a>
            </div>
            <!---->
            <div class="col-lg-6">
                <a class="project-item"href="">
                    <span class="text">
                        <span class="des">
                            <h2>Restoring mangrove ecosystems and supporting local livelihoods</h2>
                        </span>
                    </span>
                    <img src="https://i.postimg.cc/Y2nqJw9x/p12.jpg"class="img-fluid"alt="">
                </a>
            </div>
            <!---->
            <div class="col-lg-6">
                <a class="project-item"href="">
                    <span class="text">
                        <span class="des">
                            <h2> Best Friends Animal Society</h2>
                            <p class="mb-0">
                               
                            </p>
                        </span>
                    </span>
                    <img src="https://i.postimg.cc/DwT7vhQT/P3.jpg"class="img-fluid"alt="">
                </a>
            </div>
            <!---->
            <div class="col-lg-6">
                <a class="project-item"href="">
                    <span class="text">
                        <span class="des">
                            <h2>Better Home for Children</h2>
                            <p class="mb-0">
                               
                            </p>
                        </span>
                    </span>
                    <img src="https://i.postimg.cc/G3D0HNmh/P4.jpg"class="img-fluid"alt="">
                </a>
            </div>
            <!---->
        </div>
    </div>
</section>
    </body>
</html>
<?php include 'footer.php'?>