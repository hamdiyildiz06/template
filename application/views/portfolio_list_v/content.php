<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12">

                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">PORTFOLYO LİSTESİ</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->
                <p class="lead">Aşağıda sizin için seçtiğimiz çalışmalarımızdan bazılarını bulabilirsiniz.</p>

                <?php foreach ($portfolios as $portfolio): ?>
                    <div class="image-box style-3-b">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="overlay-container">
                                    <img src="<?= base_url("assets/images"); ?>/portfolio-1.jpg" alt="">
                                    <div class="overlay-to-top">
                                        <p class="small margin-clear"><em> <?= $portfolio->title; ?> </em></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-8 col-lg-9">
                                <div class="body">
                                    <h3 class="title"><a href="portfolio-item.html"><?= $portfolio->title; ?></a></h3>
                                    <p class="small mb-10"><i class="icon-calendar"></i> <?= get_readable_date($portfolio->finishedAt); ?>
                                    <?php $portfolio_category = get_portfolio_category_title($portfolio->category_id); ?>
                                    <?php if ($portfolio_category){ ?>
                                            <i class="pl-10 icon-tag-1"></i> <?= $portfolio_category; ?></p>
                                    <?php }  ?>
                                    <div class="separator-2"></div>
                                    <p class="mb-10"><?= character_limiter(strip_tags($portfolio->description),350); ?></p>
                                    <a href="<?= base_url("portfolyo-detay/{$portfolio->url}"); ?>" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Görüntüle<i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <nav>
                    <ul class="pagination">
                        <li><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav>

            </div>
            <!-- main end -->

        </div>
    </div>
</section>
<!-- main-container end -->

