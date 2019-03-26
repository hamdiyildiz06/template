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
                <h1 class="page-title">Haber Listesi</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->

                <!-- timeline grid start -->
                <!-- ================ -->
                <div class="timeline clearfix">


                    <?php $counter = 0; ?>
                    <?php foreach ($news_list as $news): ?>

                        <!-- timeline grid item start -->
                        <div class="timeline-item <?= (($counter++ % 2) == 0) ? "pull-left" : "pull-right"; ?>">
                            <!-- blogpost start -->
                            <article class="blogpost shadow light-gray-bg bordered <?= ($news->news_type == "video") ? "object-non-visible" : null; ?>"
                                <?= ($news->news_type == "video") ? 'data-animation-effect="fadeInUpSmall" data-effect-delay="100"' : null; ?>>
                                <?php if ($news->news_type == "image") {  ?>
                                    <div class="overlay-container">
                                        <img src="<?= base_url("panel/uploads/news_v/{$news->img_url}"); ?>" alt="<?= $news->url; ?>">
                                        <a class="overlay-link" href="<?= base_url("haberler-detay/{$news->url}"); ?>"><i class="fa fa-link"></i></a>
                                    </div>
                                <?php } else { ?>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?= $news->video_url; ?>"></iframe>
                                    </div>
                                <?php } ?>
                                <header>
                                    <h2><a href="<?= base_url("haberler-detay/{$news->url}"); ?>"><?= $news->title; ?></a></h2>
                                    <div class="post-info">
                                                    <span class="post-date">
                                                        <i class="icon-calendar"></i>
                                                        <span class="month"><?= get_readable_date($news->createdAt); ?></span>
                                                    </span>
                                        <span class="comments"><i class="icon-eye"></i> <a href="#"><?= $news->viewCount; ?> Görüntülenme</a></span>
                                    </div>
                                </header>
                                <div class="blogpost-content">
                                    <p>
                                        <?= character_limiter(strip_tags($news->description),200); ?>
                                    </p>
                                </div>
                                <footer class="clearfix">
                                    <div class="link pull-right"><i class="icon-link"></i><a href="<?= base_url("haberler-detay/{$news->url}"); ?>">Detayına Git</a></div>
                                </footer>
                            </article>
                            <!-- blogpost end -->
                        </div>
                        <!-- timeline grid item end -->
                    <?php endforeach; ?>

                </div>
                <!-- timeline grid end -->

            </div>
            <!-- main end -->

        </div>
    </div>
</section>
<!-- main-container end -->