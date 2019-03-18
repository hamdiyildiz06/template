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
                <h1 class="page-title">Marka Listesi</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->
                <p class="lead">Çalıştıımız Markaların Listesini Aşağıda Görebilirsiniz</p>

                <div class="row">
                    <?php foreach ($brands as $brand): ?>
                        <div class="col-sm-4">
                            <div class="image-box shadow text-center mb-20">
                                <div class="overlay-container">
                                    <img src="<?= base_url("panel/uploads/brands_v/{$brand->img_url}"); ?>" alt="<?= $brand->title; ?>">
                                    <div class="overlay-top">
                                        <div class="text">
                                            <h3><a href="portfolio-item.html"><?= $brand->title; ?></a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                    <div class="overlay-bottom">
                                        <div class="links">
                                            <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

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

