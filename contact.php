<!DOCTYPE html>
<html lang="en">

<head>
 <?php
  include ("_header.php")
  ?>
    <title>Shmap - Contact Us</title>
</head>

<body>

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
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li class="active">
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

      <div class="container" id="contactPage">

          <div class="row">
              
              <div class="col-md-4"></div>
              
              <div class="col-md-4 text-center" id="contactCenterDiv">
                
                <!-- Chat Bubble -->
                <div class="pageName animated bounceIn">
                  <h1>Contact Us</h1>
                </div>


                <section id="contact">
                  <div class="contact-div">
                    <form name="sentMessage" id="contactForm" novalidate>
                      <div class="row control-group">
                          <div class="form-group floating-label-form-group controls">
                              <label>Name</label>
                              <input type="text" class="form-control" placeholder="Tell us who you are" id="name" required data-validation-required-message="Please enter your name.">
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="row control-group">
                          <div class="form-group floating-label-form-group controls">
                              <label>Email Address</label>
                              <input type="email" class="form-control" placeholder="your@emailaddress.com" id="email" required data-validation-required-message="Please enter your email address.">
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="row control-group">
                          <div class="form-group floating-label-form-group controls">
                              <label>Message</label>
                              <textarea rows="5" class="form-control" placeholder="Say hello" id="message" required data-validation-required-message="Please enter a message."></textarea>
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <br>

                      <div id="success"></div>

                      <div class="form-group">
                          <button type="submit" class="btn btn-success btn-md">Send</button>
                      </div>

                    </form>
                  </div>    
                </section>
              </div>
              <div class="col-md-4"></div>
          </div>
          <!-- /.row -->


      </div>
      <!-- /.container -->

      <div class="clear"></div>
        
      <?php
        include ("_footer.php")
      ?>

    </div> 
    <!-- end WRAP -->


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
