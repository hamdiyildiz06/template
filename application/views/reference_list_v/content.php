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
                <h1 class="page-title">Referans Listesi</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->
                <p class="lead">Sizin İçin Referanslarımızdan Bazıları</p>

                <?php $index = 0; ?>
                <?php foreach ($references as $reference): ?>
                    <div class="image-box style-4 light-gray-bg">
                        <div class="row grid-space-0">
                            <?php if (($index % 2) == 0){ ?>
                                <div class="col-md-6">
                                    <div class="overlay-container">
                                        <img src="<?= base_url("panel/uploads/references_v/{$reference->img_url}"); ?>" alt="<?= $reference->title; ?>">
                                        <div class="overlay-to-top">
                                            <p class="small margin-clear"><em><?= $reference->title; ?></em></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="body">
                                        <div class="pv-30 visible-lg"></div>
                                        <h3><?= $reference->title; ?></h3>
                                        <div class="separator-2"></div>
                                        <p class="margin-clear"><?= character_limiter(strip_tags($reference->description), 200); ?></p>
                                        <br>
                                        <a href="#" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Detayı Görüntüle<i class="fa fa-arrow-right pl-10"></i></a>
                                    </div>
                                </div>
                        <?php }else{ ?>
                                <div class="col-md-6">
                                    <div class="body">
                                        <div class="pv-30 visible-lg"></div>
                                        <h3><?= $reference->title; ?></h3>
                                        <div class="separator-2"></div>
                                        <p class="margin-clear"><?= character_limiter(strip_tags($reference->description), 200); ?></p>
                                        <br>
                                        <a href="#" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Detayı Görüntüle<i class="fa fa-arrow-right pl-10"></i></a>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="overlay-container">
                                        <img src="<?= base_url("panel/uploads/references_v/{$reference->img_url}"); ?>" alt="<?= $reference->title; ?>">
                                        <div class="overlay-to-top">
                                            <p class="small margin-clear"><em><?= $reference->title; ?></em></p>
                                        </div>
                                    </div>
                                </div>
                        <?php } $index++; ?>
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

