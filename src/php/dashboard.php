<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
<aside class="side-nav" id="show-side-navigation1">
    <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>

    <div class="search">
        <input type="text" placeholder="Type here"><i class="fa fa-search"></i>
    </div>
    <ul class="categories">
        <li><i class="fa fa-home fa-fw" aria-hidden="true"></i><a href="#">Registration</a>
            <ul class="side-nav-dropdown">
                <li><a href="../registration.html">New Registration</a></li>
                <li><a href="#">Registration Details</a></li>
            </ul>
        </li>
        <li><i class="fa fa-support fa-fw"></i><a href="#">Members Details</a>
            <ul class="side-nav-dropdown">
                <li><a href="#">2020-2019</a></li>
                <li><a href="#">2019-2018</a></li>
                <li><a href="#">2018-2017</a></li>
            </ul>
        </li>
        <li><i class="fa fa-envelope fa-fw"></i><a href="#">Book Details</a>
            <ul class="side-nav-dropdown">
                <li><a href="book.php">New Book Add</a></li>
                <li><a href="#">Novel</a></li>
                <li><a href="#">Romatic</a></li>
                <li><a href="#">Adventure</a></li>
                <li><a href="#">Education</a></li>

            </ul>
        </li>
        <li><i class="fa fa-users fa-fw"></i><a href="#">Borrow Details</a>
            <ul class="side-nav-dropdown">
                <li><a href="borrow.php">New Borrow</a></li>
                <li><a href="#">2020-2019</a></li>
                <li><a href="#">2019-2018</a></li>
                <li><a href="#">2018-2017</a></li>
            </ul>
        </li>
        <li><i class="fa fa-bolt fa-fw"></i><a href="#">Return Details</a>
            <ul class="side-nav-dropdown">
                <li><a href="#">2020-2019</a></li>
                <li><a href="#">2019-2018</a></li>
                <li><a href="#">2018-2017</a></li>
            </ul>
        </li>

        <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="#"> Author</a>
            <ul class="side-nav-dropdown">
                <li><a href="#">Novel</a></li>
                <li><a href="#">Romatic</a></li>
                <li><a href="#">Adventure</a></li>
                <li><a href="#">Education</a></li>

            </ul>
        </li>
        <li><i class="fa fa-wrench fa-fw"></i><a href="#"> Publisher </a>
            <ul class="side-nav-dropdown">
                <li><a href="#">Colombo Distric</a></li>
                <li><a href="#">Kaluthara Distric</a></li>
                <li><a href="#">Negombo Distric</a></li>

            </ul>
        </li>
        <li><i class="fa fa-laptop fa-fw"></i><a href="#"> Settings </a></li>
        <li><i class="fa fa-comments-o fa-fw"></i><a  href="logout.php"> log out</a></li>
    </ul>
</aside>
<section id="contents">

    <div class="welcome">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h2>-Library Management System-</h2>
                        <p>Welcome to the IJSE library management system</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="statistics">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <i class="fa fa-book fa-fw bg-primary"></i>
                        <div class="info">
                            <h3>3,200</h3> <span>Books</span>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <i class="fa fa-user fa-fw danger"></i>
                        <div class="info">
                            <h3>525</h3> <span>Members</span>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <i class="fa fa-users fa-fw success"></i>
                        <div class="info">
                            <h3>5</h3> <span>Employees</span>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<section class="charts">-->
    <!--<div class="container-fluid">-->
    <!--<div class="row">-->
    <!--<div class="col-md-6">-->
    <!--<div class="chart-container">-->
    <!--<h3>Chart</h3>-->
    <!--<canvas id="myChart"></canvas>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-md-6">-->
    <!--<div class="chart-container">-->
    <!--<h3>Chart2</h3>-->
    <!--<canvas id="myChart2"></canvas>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</section>-->
    <section class="admins">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <h3>Author:</h3>
                        <div class="admin">
                            <div class="img">
                                <!--<img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148906966/small/1501685402/enhance" alt="admin">-->
                            </div>
                            <div class="info">
                                <h3>Martin Wickramasinghe</h3>
                                <p>Madol Doova, Gamperaliya & etc.</p>
                            </div>
                        </div>
                        <div class="admin">
                            <div class="img">
                                <!--<img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907137/small/1501685404/enhance" alt="admin">-->
                            </div>
                            <div class="info">
                                <h3>Geoffrey Bawa</h3>
                                <p>Genius of the Place : an Architect of Sri Lanka</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <h3>Publishers:</h3>
                        <div class="admin">
                            <div class="img">
                                <!--<img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907114/small/1501685404/enhance" alt="admin">-->
                            </div>
                            <div class="info">
                                <h3>Sri Lanka Book Publishers' Association</h3>
                                <p> No .3G 12C  Block 04, Bauddhaloka Mawatha, Colombo</p>
                            </div>
                        </div>
                        <div class="admin">
                            <div class="img">
                                <!--<img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907086/small/1501685404/enhance" alt="admin">-->
                            </div>
                            <div class="info">
                                <h3>Sarasavi Publishers (Pvt) Ltd</h3>
                                <p> 1/3 Church St, Nugegoda 10250</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <section class='statis text-center'>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="box bg-primary">
                        <i class="fa fa-eye"></i>
                        <h3>1,154</h3>
                        <p class="lead">Books Borrow</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box danger">
                        <i class="fa fa-user-o"></i>
                        <h3>245</h3>
                        <p class="lead">Books Return</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box warning">
                        <i class="fa fa-shopping-cart"></i>
                        <h3>3133</h3>
                        <p class="lead">Authors</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box success">
                        <i class="fa fa-handshake-o"></i>
                        <h3>154</h3>
                        <p class="lead">Publishes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<section class="chrt3">-->
    <!--<div class="container-fluid">-->
    <!--<div class="row">-->
    <!--<div class="col-md-9">-->
    <!--<div class="chart-container">-->
    <!--<canvas id="chart3" width="100%"></canvas>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-md-4">-->
    <!--<div class="box">-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</section>-->
    <!--</section>-->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src='http://code.jquery.com/jquery-latest.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
    <script src="../js/dashboard.js"></script>
</body>
</html>






<?php
//session_start();
//if (!isset($_SESSION["Username"])){
//    header("Location:logger.php");
//}
//?>