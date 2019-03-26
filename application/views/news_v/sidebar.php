<aside class="col-md-4 col-lg-3 col-lg-offset-1">
    <div class="sidebar">
        <div class="block clearfix">
            <nav>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="<?= base_url(""); ?>">Anasayfa</a></li>
                    <li><a href="<?= base_url("urun-listesi"); ?>">Ürünler</a></li>
                    <li><a href="<?= base_url("portfolyo-listesi"); ?>">Portfolyo</a></li>
                    <li><a href="<?= base_url("hakkimizda"); ?>">Hakkımızda</a></li>
                    <li><a href="<?= base_url("iletisim"); ?>">İletişim</a></li>
                </ul>
            </nav>
        </div>
        <div class="block clearfix">
            <h3 class="title">Son Haberler</h3>
            <div class="separator-2"></div>
            <?php foreach ($recent_news_list as $recent_news): ?>
                <div class="media margin-clear">
                    <div class="media-left">
                        <?php if ($recent_news->news_type == "image") {  ?>
                            <div class="overlay-container">
                                <img class="media-object"  src="<?= base_url("panel/uploads/news_v/{$recent_news->img_url}"); ?>" alt="<?= $recent_news->url; ?>">
                                <a href="<?= base_url("haberler-detay/{$recent_news->url}"); ?>" class="overlay-link small"><i class="fa fa-link"></i></a>
                            </div>
                        <?php } else { ?>
                            <div>
                                <iframe style="width: 100px; height: 50px" class="embed-responsive-item" src="//www.youtube.com/embed/<?= $recent_news->video_url; ?>"></iframe>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="media-body">
                        <h6 class="media-heading"><a href="<?= base_url("haberler-detay/{$recent_news->url}"); ?>"><?= character_limiter(strip_tags($recent_news->title),50); ?></a></h6>
                        <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i><?= get_readable_date($recent_news->createdAt); ?></p>
                    </div>
                    <hr>
                </div>
            <?php endforeach; ?>

            <div class="text-right space-top">
                <a href="<?= base_url("haberler"); ?>" class="link-dark"><i class="fa fa-plus-circle pl-5 pr-5"></i>Daha Fazla</a>
            </div>
        </div>
    </div>
</aside>