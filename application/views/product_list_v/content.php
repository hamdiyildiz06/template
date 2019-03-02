<section class="main-container">
    <div class="container">
        <div class="row">
            <div class="main col-md-12">
                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">Ürün Listesi</h1>
                <p>Kullandığımız ürünlerin listesini aşağıda görebilirsiniz</p>
                <div class="separator-2"></div>
                <!-- page-title end -->

                <div class="row">
                    <?php foreach ($products as $product): ?>
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
    </div>

    </div>
</section>

