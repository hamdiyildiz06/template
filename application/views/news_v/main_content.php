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
                    <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                    <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div>
        </footer>
    </article>
    <!-- blogpost end -->

</div>