<!DOCTYPE html>
<html lang="en">

<head>
 <?php
  include ("_header.php")
  ?>
    <title>Shmap - Coming Soon!</title>

</head>

<body>


<!-- Google Analytics tracking code -->
<?php include_once("analyticstracking.php") ?>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="img/logotext.png" alt="Shmap Logo" class="img-responsive animated fadeInLeft" alt="Shmap Logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>




    <!-- Page Content -->
    <div class="wrap">

        <div class="container" id="homePage">

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center pageName animated bounceIn">
                    <h1 class="animated flipInX"><em>Shmap - Coming soon!</em></h1>
                    <p class="lead">Stay tuned...</p>
                </div>
                <div class="col-md-4"></div>


            </div>
            <!-- /.row -->

        </div><!-- /.container -->
        
        <?php
          include ("_footer.php")
        ?>            

    </div><!-- end Wrap -->
    



    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
