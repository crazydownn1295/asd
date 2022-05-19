
<?php
include("db_conn.php");
?>


<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SYQBY4LDDC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SYQBY4LDDC');
</script>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Crazy Down </title>
    <meta name="description" content="A Puzzle Game for Windows"/>
    <meta property="og:image" content="https://crazy-down.net/gameplay.gif"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="theme-color" content="#1bb566">

  

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
</head>
 

<?php
session_start();
if (!empty($_SESSION["name"])) {
    $kullaniciadi = $_SESSION["name"];
} else {
    header("location:loginn.php");
}
?>



<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-15">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Homepage</a></li>
                                    <li><a href="about-game.php">About Game</a>
                                    <li><a href="system.php">System Requirements</a>
                                    <li><a href="./comments.php">Comments</a>
                                    <li><a href="https://download.crazy-down.net/">DOWNLOAD</a>
                                    <li><a href="https://virustotal.crazy-down.net/">VIRUSTOTAL</a>
                                </ul>
                            </ul>
                            </ul>
                            </li>
                        </nav>
                    </div>

                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="img/ss_0caf1bf01ba128dedbed851207e086174b600314.600x338.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">10+ Maps</div>
                                <p></p>
                                <a href="https://download.crazy-down.net/"><span>Play Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/ss_e559ccb18c864e02303210233ac2f6769edbb5ba.600x338.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Fun</div>
                                <p></p>
                                <a href="https://download.crazy-down.net/"><span>Play Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="hero__items set-bg" data-setbg="img/ss_e281f62a0f08ecb7caa9ca0a631c055600781218.600x338.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Characters</div>
                                <p></p>   
                                <a href="https://download.crazy-down.net/"><span>Play Now</span></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br> 
                <br>
                <p align="center"><iframe width="853" height="480" src="https://www.youtube.com/embed/av4MWYNvFOU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    </section>
    <!-- Hero Section End -->

   
</div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3"><span class="arrow_carrot-up"></span></a>
              
                </div>
            </div>
            
                </div>
            </div>

              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>

