<div class="main col-md-8">

    <!-- page-title start -->
    <!-- ================ -->
    <h1 class="page-title">Blog Post</h1>
    <!-- page-title end -->

    <!-- blogpost start -->
    <!-- ================ -->
    <article class="blogpost full">
        <header>
            <div class="post-info">
                <span class="post-date">
                    <i class="icon-calendar"></i>
                    <span class="month"><?= get_readable_date($news->createdAt); ?></span>
                </span>
                <span class="comments"><i class="icon-eye"></i> <a href="#"><?= $news->viewCount; ?> Görüntülenme</a></span>
            </div>
        </header>
        <div class="blogpost-content">
            <div id="carousel-blog-post" class="carousel slide mb-20" data-ride="carousel">
                <?php if ($news->news_type == "image"){ ?>
                    <div class="overlay-container">
                        <img src="<?= base_url("panel/uploads/news_v/{$news->img_url}"); ?>" alt="<?= $news->url; ?>">
                        <a class="overlay-link popup-img" href="<?= base_url("panel/uploads/news_v/{$news->img_url}"); ?>"><i class="fa fa-search-plus"></i></a>
                    </div>
                <?php } else { ?>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?= $news->video_url; ?>"></iframe>
                    </div>
                <?php } ?>
            </div>
            <p>
                <?= $news->description; ?>
            </p>
        </div>
        <footer class="clearfix">
            <div class="link pull-right">
                <ul class="social-links circle small colored clearfix margin-clear text-right animated-effect-1">
                    <li class="twitter">
                        <a class="share-button" target="_blank" href="https://twitter.com/intent/tweet?text=<?= $news->title; ?> Haberi&url=<?= base_url("haberler-detay/{$news->url}"); ?>"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="facebook">
                        <a class="share-button" target="_blank" href="https://www.facebook.com/sharer.php?u=<?= base_url("haberler-detay/{$news->url}"); ?>&t=<?= $news->title; ?> Haberi"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="googleplus">
                        <a class="share-button" target="_blank" href="https://plus.google.com/share?url=<?= base_url("haberler-detay/{$news->url}"); ?>"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
            </div>
        </footer>
    </article>
    <!-- blogpost end -->

</div>