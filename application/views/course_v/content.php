<!-- banner start -->
<!-- ================ -->
<div class="banner dark-translucent-bg" style="background-image:url('<?= base_url("panel/uploads/courses_v/{$course->img_url}"); ?>'); background-position: 50% 21%;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center col-md-offset-2 pv-20">
                <h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><strong><?= $course->title; ?></strong></h2>
                <div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
                <p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><?= character_limiter(strip_tags($course->description), 200); ?></p>
                <div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
                <p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><i class="fa fa-calendar"></i><?= get_readable_date($course->event_date); ?></p>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<div class="main-container">

    <div class="container">

        <div class="row">


            <div class="col-md-12">


                <!-- main-container start -->
                <!-- ================ -->
                <section class="main-container padding-ver-clear">
                    <div class="container pv-40">
                        <div class="row">

                            <!-- main start -->
                            <!-- ================ -->
                            <div class="main col-md-8">
                                <h1 class="title"><?= $course->title; ?></h1>
                                <div class="separator-2"></div>
                                <p><?= $course->description; ?></p>
                            </div>
                            <!-- main end -->

                            <!-- sidebar start -->
                            <!-- ================ -->
                            <aside class="col-md-4 col-lg-3 col-lg-offset-1">
                                <div class="sidebar">
                                    <div class="block clearfix">
                                        <h3 class="title">Eğitim Deytayları</h3>
                                        <div class="separator-2"></div>
                                        <ul class="list margin-clear">
<!--                                            <li><strong>Müşteri: </strong> <span class="text-right"><?php $course->client; ?></span></li>-->
                                            <li><strong>Bitiş Tarihi: </strong> <span class="text-right"><?= get_readable_date($course->createdAt); ?></span></li>
                                            <li><strong>Kategori: </strong> <span class="text-right"><?php // get_course_category_title($course->category_id); ?></span></li>
<!--                                            <li><strong>Place: </strong> <span class="text-right">--><?php //$course->place; ?><!--</span></li>-->
<!--                                            <li><strong>URL: </strong> <span class="text-right"><a href="--><?php //$course->url; ?><!--">http://localhost/codeigniter/cms/site/portfolyo-detay/--><?php //$course->url; ?><!--</a></span></li>-->
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
                        <h3>Diğer <strong>Eğitimler</strong></h3>
                        <div class="row grid-space-10">
                            <?php foreach ($other_courses as $course): ?>
                                <div class="col-sm-4">
                                    <div class="image-box style-2 mb-20 bordered light-gray-bg">
                                        <div class="overlay-container overlay-visible">



                                            <img src="<?= base_url("panel/uploads/courses_v/{$course->img_url}"); ?>" alt="<?= $course->url; ?>">
                                            <div class="overlay-bottom text-left">
                                                <p class="lead margin-clear"><?= character_limiter(strip_tags($course->title),25); ?></p>
                                            </div>
                                        </div>
                                        <div class="body">

                                            <p><?= character_limiter(strip_tags($course->description), 25); ?></p>
                                            <a href="<?= base_url("egitim-detay/{$course->url}"); ?>" class="btn btn-default btn-sm btn-hvr hvr-sweep-to-right margin-clear">Görüntüle<i class="fa fa-arrow-right pl-10"></i></a>
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