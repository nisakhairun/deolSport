<?php
function base_link(){
  echo base_url('asset');
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_link(); ?>/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_link(); ?>/vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_link(); ?>/css/agency.css" rel="stylesheet">

  </head>

  <body id="page-top">
    <?php
    $this->load->view('Homepage/header');
    ?>
    <!-- Navigation -->
    <!-- Header -->
    <header class="masthead" id="home">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Sport Studio!</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#product">Tell Me More</a>
        </div>
      </div>
    </header>

    <!-- Product -->
    <?php
    $this->load->view('Homepage/product');
    ?>

    <!-- Galery -->
    <?php
    $this->load->view('Homepage/galery');
    ?>

    <!-- About -->

    <!-- Team -->
    <?php
    $this->load->view('Homepage/profil');
    ?>

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <?php
    $this->load->view('Homepage/contact');
    ?>

    <!-- Footer -->
    <?php
    $this->load->view('Homepage/footer');
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_link(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_link(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_link(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_link(); ?>/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_link(); ?>/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_link(); ?>/js/agency.min.js"></script>

  </body>

</html>
