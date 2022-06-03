<!DOCTYPE html>
<html>
    <head>
        <title>UI Admin - Clean and responsive administration panel</title>
        <meta charset="UTF-8">
        <meta name="description" content="Clean and responsive administration panel">
        <meta name="keywords" content="Admin,Panel,HTML,CSS,XML,JavaScript">
        <meta name="author" content="Erik Campobadal">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/notyf.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" integrity="sha256-ECB9bbROLGm8wOoEbHcHRxlHgzGqYpDtNTgDTyDz0wg=" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>        <script src="js/uikit.min.js" ></script>
        <script src="js/uikit-icons.min.js" ></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    </head>
    <body>
    <div uk-sticky class="uk-navbar-container tm-navbar-container uk-active">
            <div class="uk-container uk-container-expand">
                <nav uk-navbar>
                    <div class="uk-navbar-left">
                        <a id="sidebar_toggle" class="uk-navbar-toggle" uk-navbar-toggle-icon href="index.html"></a>
                        <h1>
                            WASTIFY
                        </h1>
                    </div>
                    <div class="uk-navbar-right uk-light">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a href="#">Menu &nbsp;<span class="ion-ios-arrow-down"></span></a>
                                <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                                   <ul class="uk-nav uk-navbar-dropdown-nav">
                                       <li><a href="#">Edit Profile</a></li>
                                       <li><a href="login.html">Logout</a></li>
                                   </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div id="sidebar" class="tm-sidebar-left uk-background-default">
            <center>
                <div class="user">
                    <img id="avatar" width="100" class="uk-border-circle" src="images/avatar.jpg" />
                    <div class="uk-margin-top"></div>
                    <div id="name" class="uk-text-truncate">Lord Adei</div>
                    <div id="email" class="uk-text-truncate">lordii345@gmail.com</div>
                    <span id="status" data-enabled="true" data-online-text="Online" data-away-text="Away" data-interval="10000" class="uk-margin-top uk-label uk-label-success"></span>
                </div>
                <br />
            </center>
            <ul class="uk-nav uk-nav-default">

                <li class="uk-nav-header">
                </li>
                    <li><a href="manageDrivers.php">Add Drivers</a></li>
                    <li><a href="manageClients.php">Add Users</a></li>
                    <li><a href="addDriverss.php">View Drivers</a></li>
                    <li><a href="addClientss.php">View Clients</a></li>
                    <li class="uk-nav-header">
                </li>
            </ul>
        </div>
        <div class="content-padder content-background">
            <div class="uk-section-small uk-section-default header">
                <div class="uk-container uk-container-large">
                    <h1><span class="ion-speedometer"></span> Dashboard</h1>
                    <p>
                        Welcome back, Lord Ohene
                    </p>
                    <ul class="uk-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><span href="">Scheduler</span></li>
                    </ul>
                </div>
            </div>
            <div class="uk-section-small">
                <div class="uk-container uk-container-large">
                    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@l">
                        <div class="wrapper">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="page-header">
                                            <h2>Client Details Form</h2>
                                        </div>
                                        <p>Please fill this form and submit to add a client record to the database.</p>
                                        <form action="insertClients.php" method="post">
                                            <div class="form-group">
                                                <label>Fullname</label>
                                                <input type="text" name="fullname" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Location</label>
                                                <input type="text" name="location" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" name="phone" class="form-control">
                                            </div>
                                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                                        </form>
                                    </div>
                                </div>        
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- Load More Javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js" integrity="sha256-UGwvyUFH6Qqn0PSyQVw4q3vIX0wV1miKTracNJzAWPc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js" integrity="sha256-rqEXy4JTnKZom8mLVQpvni3QHbynfjPmPxQVsPZgmJY=" crossorigin="anonymous"></script>
        <script src="js/notyf.min.js"></script>
        <!-- Required Overall Script -->
        <script src="js/script.js"></script>
        <!-- Status Updater -->
        <script src="js/status.js"></script>
        <!-- Sample Charts -->
        <script src="js/charts.js"></script>
        <!-- Sample Notifications -->
        <script src="js/notification.js"></script>

        
<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="/Admin Side/js/objects.js"></script>
    </body>
</html>