<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="tr" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="tr" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="tr" lang="tr">
<!--<![endif]-->

<head>
    <?php $this->load->view("includes/head"); ?>
</head>

<body class="no-trans front-page transparent-header  page-loader-5">

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">

        <?php $this->load->view("includes/header"); ?>
        <!-- breadcrumb start -->
        <!-- ================ -->
        <div class="breadcrumb-container">
            <div class="container">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
                    <li class="active">Image Boxes</li>
                </ol>
            </div>
        </div>
        <!-- breadcrumb end -->

        <?php $this->load->view("{$viewFolder}/content"); ?>



        <?php $this->load->view("includes/footer"); ?>

    </div>

<?php $this->load->view("includes/include_script"); ?>
</body>
</html>