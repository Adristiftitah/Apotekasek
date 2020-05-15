<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Sasha - Blogging HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APOTEKASEK</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    
    <!-- Import Icon Packs -->
    <link href="<?php echo base_url() ?>assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="<?php echo base_url() ?>asets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asets/css/elegent-icons.css">

    <!-- Import External Scrpit CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asets/css/owl.carousel.css">

    <!-- Import Template CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asets/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asets/css/header.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asets/css/themes.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asets/css/responsive.css">

    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script> -->

    <script src="<?php echo base_url() ?>asets/js/modernizr-2.8.3.min.js"></script>

</head>


<body>

    <div class="overlay-wrapper">

        <header class="masthead style-02">

            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 hidden-xs">
                            <a class="logo"><h4><b>APOTEK<span>ASEK</span></b></h4></a>
                        </div>
                        <div class="top-menu">
                            <ul class="nav pull-right top-menu">
                              <li><a class="logout" href="<?= base_url(); ?>Login/logout">Logout</a></li>
                            </ul>
                         </div>
                         <div class="nav notify-row" id="top_menu">
                      </div>
                      <div class="top-menu">
                        <ul class="nav pull-left top-menu">
                          <li><div><h3>Selamat Datang <?php echo $this->session->userdata('username') ?></h3></div></li>
                          <?php ?>
                        </ul>
                      </div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.header-top -->

            <div class="header-bottom">
                <div class="container" align="center">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand visible-xs" href="./"><img src="<?php echo base_url() ?>asets/images/logo3.png" alt="Site Logo"></a>
                        </div>

                        <div id="main-menu" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav pull-left">
                                <li class="menu-item"><a href="<?php echo base_url().'User/index'?>">Home</a></li>
                                <li class="menu-item"><a href="#">Categories</a></li>
                                <li class="menu-item"><a href="#">Contact</a></li>
                            </ul><!-- /.navbar-nav -->

                            <div class="menu-search pull-right">
                                <div class="form-trigger"><i class="icon_search"></i></div>
                                <form action="#">
                                    <input type="text" name="search" id="menu-search" placeholder="Search here..">
                                </form>
                            </div>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div><!-- /.container -->
            </div><!-- /.header-bottom -->
        </header><!-- /.masthead -->