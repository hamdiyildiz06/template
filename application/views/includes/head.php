<?php $settings = get_settings(); ?>
<meta charset="utf-8">
<title><?= $settings->company_name. " | " . $settings->slogan; ?></title>
<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
<meta name="author" content="Hamdi YILDIZ">

<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php if (isset($opengraph)){ ?>

<!--    OPENGRAPH    -->
    <meta property="og:title" content="<?= $news->title; ?>">
    <meta property="og:description" content="<?= character_limiter(strip_tags($news->description), 200); ?>">
    <?php if ($news->news_type == "image"){ ?>
        <meta property="og:image" content="<?= base_url("panel/uploads/news_v/{$news->img_url}"); ?>">
    <?php }else{ ?>
        <meta property="og:video" content="<?= "https://www.youtube.com/v/{$news->video_url}"; ?>">
    <?php } ?>

<?php } ?>

<?php $this->load->view("includes/include_style"); ?>