<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- banner start -->
                <!-- ================ -->
                <div class="pv-40 banner light-gray-bg">
                    <div class="container clearfix">

                        <!-- slideshow start -->
                        <!-- ================ -->
                        <div class="slideshow">

                            <!-- slider revolution start -->
                            <!-- ================ -->
                            <div class="slider-revolution-5-container">
                                <div id="slider-banner-boxedwidth" class="slider-banner-boxedwidth rev_slider" data-version="5.0">
                                    <ul class="slides">

                                        <?php foreach ($product_image as $image): ?>
                                            <!-- slide 1 start -->
                                            <!-- ================ -->
                                            <li class="text-center" data-transition="slidehorizontal" data-slotamount="default" data-masterspeed="default" data-title="<?= $product->title ?>">

                                                <!-- main image -->
                                                <img src="<?= base_url("panel/uploads/product_v/{$image->img_url}"); ?>" alt="<?= $product->title; ?>" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

                                                <!-- Transparent Background -->
                                                <div class="tp-caption dark-translucent-bg"
                                                     data-x="center"
                                                     data-y="center"
                                                     data-start="0"
                                                     data-transform_idle="o:1;"
                                                     data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                                     data-transform_out="o:0;s:600;"
                                                     data-width="5000"
                                                     data-height="450">
                                                </div>

                                            </li>
                                            <!-- slide 1 end -->
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="tp-bannertimer"></div>
                                </div>
                            </div>
                            <!-- slider revolution end -->

                        </div>
                        <!-- slideshow end -->

                    </div>
                </div>
                <!-- banner end -->

                <!-- main-container start -->
                <!-- ================ -->
                <section class="main-container padding-ver-clear">
                    <div class="container pv-40">
                        <div class="row">

                            <!-- main start -->
                            <!-- ================ -->
                            <div class="main col-md-8">
                                <h1 class="title"><?= $product->title; ?></h1>
                                <div class="separator-2"></div>
                                <p><?= $product->description; ?></p>
                            </div>
                            <!-- main end -->

                            <!-- sidebar start -->
                            <!-- ================ -->
                            <aside class="col-md-4 col-lg-3 col-lg-offset-1">
                                <div class="sidebar">
                                    <div class="block clearfix">
                                        <h3 class="title">Project Info</h3>
                                        <div class="separator-2"></div>
                                        <ul class="list margin-clear">
                                            <li><strong>Client: </strong> <span class="text-right">John Doe</span></li>
                                            <li><strong>Date: </strong> <span class="text-right">May 2015</span></li>
                                            <li><strong>In: </strong> <span class="text-right">Web Design</span></li>
                                            <li><strong>Place: </strong> <span class="text-right">Europe</span></li>
                                            <li><strong>URL: </strong> <span class="text-right"><a href="#">www.theproject.com</a></span></li>
                                        </ul>
                                        <a href="#" class="btn btn-animated btn-default btn-lg">External Link <i class="fa fa-external-link"></i></a>
                                        <h3>Share This</h3>
                                        <div class="separator-2"></div>
                                        <ul class="social-links colored circle small">
                                            <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                            <li class="xing"><a target="_blank" href="http://www.xing.com"><i class="fa fa-xing"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                            <!-- sidebar end -->
                        </div>
                    </div>
                </section>
                <!-- main-container end -->

                <!-- section start -->
                <!-- ================ -->
                <section class="section light-gray-bg pv-40 clearfix">
                    <div class="container">
                        <h3>Diğer <strong>Ürünler</strong></h3>
                        <div class="row grid-space-10">
                            <?php foreach ($other_products as $product): ?>
                                <div class="col-sm-4">
                                    <div class="image-box style-2 mb-20 bordered light-gray-bg">
                                        <div class="overlay-container overlay-visible">

                                            <?php
                                            $image = get_product_cover_image($product->id);
                                            $image = ($image) ? base_url("panel/uploads/product_v/{$image}") : base_url("assets/images/portfolio-1.jpg");
                                            ?>

                                            <img src="<?= $image; ?>" alt="<?= $product->url; ?>">
                                            <div class="overlay-bottom text-left">
                                                <p class="lead margin-clear"><?= character_limiter(strip_tags($product->title),25); ?></p>
                                            </div>
                                        </div>
                                        <div class="body">

                                            <p><?= character_limiter(strip_tags($product->description), 25); ?></p>
                                            <a href="<?= base_url("urun-detay/{$product->url}"); ?>" class="btn btn-default btn-sm btn-hvr hvr-sweep-to-right margin-clear">Görüntüle<i class="fa fa-arrow-right pl-10"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
                <!-- section end -->

            </div>
        </div>
    </div>
</div>