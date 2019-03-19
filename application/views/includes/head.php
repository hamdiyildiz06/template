<?php $settings = get_settings(); ?>
<meta charset="utf-8">
<title><?= $settings->company_name. " | " . $settings->slogan; ?></title>
<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
<meta name="author" content="Hamdi YILDIZ">

<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php $this->load->view("includes/include_style"); ?>