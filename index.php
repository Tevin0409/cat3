<!DOCTYPE html>
<html>
<head>
    <meta name="veiwport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title></title>
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <img src="img/school.jpg" alt="Patch School" height="140px" width="220px">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="login.php">Login</a>
                </li>
                <li>
                    <a class="page-scroll" href="Signup.php">Signup</a>
                </li>
            </ul>
        </div>

    </div>

</nav>


<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item slides active">
            <div class="slide-1"></div>
            <div class="hero">

                    <h1>Patch School</h1>
                    <h3>Motto: <i><b><q>To The uttermost</q></b></i></h3>

                <a href="#about" class="btn btn-hero btn-lg" role="button">See all features</a>
            </div>
        </div>
        <div class="item slides">
            <div class="slide-2"></div>
            <div class="hero">

                    <h1>We are smart</h1>
                    <h3>Get start your next awesome project</h3>

                <button class="btn btn-hero btn-lg" role="button">See all features</button>
            </div>
        </div>
        <div class="item slides">
            <div class="slide-3"></div>
            <div class="hero">

                    <h1>We are amazing</h1>
                    <h3>Get start your next awesome project</h3>

                <a href="#about" class="btn btn-hero btn-lg" role="button">See all features</a>
            </div>
        </div>
    </div>
</div>
<div class="">
    <section id="pepper" class="pepper">
        <div class="container-fluid">
            <div class="row">
                <div class="main_pepper text-center">
                    <div class="col-sm-6 no-padding">
                        <div class="single_pepper_right">
                            <img src="img/patch1.jpg" alt="" height="" />
                        </div>
                    </div>
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="single_pepper">
                            <h1 style="text-align: center;" id="about">About us</h1>
                                    <p>
                                        Located on the outskirts of Nairobi, about 11 km from the city center. Patch School is a National Boys
                                           Boarding school admitting boys from the Ages of 12-19 yrs.It offers the Kenya Secondary Certificate of Education
                                          (KCSE) upon completion of a 4 year course.
                                            The Examination is administered by the Kenya National examination Council (KNEC)
                                           a National examining body.
                                            At its picturesque 200-Acre campus established in 1929, Patch School provides
                                            a well-rounded education to approximately 1104 students who come from the 8 provinces that make up Kenya.

                                        </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="pepper" class="pepper">
        <div class="container-fluid">
            <div class="row">
                <div class="main_pepper text-center">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="single_pepper">
                            <h3>Vision</h3>
                            <p>To be a World-Class centre of Academic,
                                Spiritual and Moral Excellence.

                                </p>

                        </div>
                        <div class="single_pepper">
                            <h3>Mission</h3>
                            <p>To provide of high quality education, through innovation, positive influence, team-work and self discipline;
                                guided by the principles of professionalism, commitment and excellence.</p>

                        </div>
                    </div>
                    <div class="col-sm-6 no-padding">
                        <div class="single_pepper_right">
                            <img src="img/school1.jpg" alt="" height="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

</body>
</html>