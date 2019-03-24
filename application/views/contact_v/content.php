<?php $settings = get_settings(); ?>
<!-- banner start -->
<!-- ================ -->
<div class="banner dark-translucent-bg" style="background-image:url('<?= base_url("assets/images"); ?>/background-img-3.jpg'); background-position: 50% 30%;">

    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center col-md-offset-2 pv-20">
                <h1 class="page-title text-center">Bize Ulaşın</h1>
                <div class="separator"></div>
                <p class="lead text-center">Bize Ulaşmak İçin Aşağıdaki Kanallardan Herhangi Birini Kullanabilirsiniz..</p>
                <ul class="list-inline mb-20 text-center">
                    <li><i class="text-default fa fa-map-marker pr-5"></i><?= strip_tags($settings->address); ?></li>
                    <li><a href="tel:<?= $settings->phone_1; ?>" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-5"></i><?= $settings->phone_1; ?></a></li>
                    <li><a href="mailto:<?= $settings->email; ?>" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-5"></i><?= $settings->email; ?></a></li>
                </ul>
                <div class="separator"></div>
                <ul class="social-links circle animated-effect-1 margin-clear text-center space-bottom">
                    <?php if ($settings->facebook){ ?>
                        <li class="facebook"><a target="_blank" href="<?= $settings->facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                    <?php } if ($settings->twitter) { ?>
                        <li class="twitter"><a target="_blank" href="<?= $settings->twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                    <?php }  if ($settings->instagram){ ?>
                        <li class="instagram"><a target="_blank" href="<?= $settings->instagram; ?>"><i class="fa fa-instagram"></i></a></li>
                    <?php }  if ($settings->linkedin){ ?>
                        <li class="linkedin"><a target="_blank" href="<?= $settings->linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12 space-bottom">
                <h2 class="title">Bize Yazın</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p>Bize Mesaj Göndermek İçin Aşağıdaki Formu Kullanabilirsiniz</p>
                        <div class="alert alert-success hidden" id="MessageSent">
                            Mesaj Başarılı bir şekilde bize iletildi
                        </div>
                        <div class="alert alert-danger hidden" id="MessageNotSent">
                            Mesaj gönderilirken bir problem oluştu lütfen tekrar deneyiniz
                        </div>
                        <div class="contact-form">
                            <form id="" class="margin-clear" role="form" action="<?= base_url("mesaj-gonder"); ?>" method="post">
                                <div class="form-group has-feedback">
                                    <label for="name">Adınız*</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Adınız">
                                    <i class="fa fa-user form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="email">E-Posta*</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-posta Adresiniz">
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="subject">Konu*</label>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Konu">
                                    <i class="fa fa-navicon form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="message">Mesajınız*</label>
                                    <textarea class="form-control" rows="6" id="message" name="message" placeholder="Mesajınız"></textarea>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <?= $captcha['image']; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback">
                                            <input type="text" class="form-control" name="captcha" placeholder="Doğrulama Kodu">
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                <button type="submit" class="submit-button btn btn-default">Gönder</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="map-canvas"></div>
                    </div>
                </div>
            </div>
            <!-- main end -->
        </div>
    </div>
</section>
<!-- main-container end -->

<!-- section start -->
<!-- ================ -->
<section class="section pv-40 parallax background-img-1 dark-translucent-bg" style="background-position:50% 60%;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h2 class="title">En Yeni HAberler İçin Abone Olun</h2>
                            <p>Kampanyalarımızdan, fırdatlarımızdan ve etkinliklerimizden ilk önce haberdar sahibi olmak istiyorsanız bize abone olmayı unutmayın..</p>
                            <div class="separator"></div>
                            <form class="form-inline margin-clear" action="<?= base_url("abone-ol"); ?>" method="post">
                                <div class="form-group has-feedback">
                                    <label class="sr-only" for="subscribe2">E-posta Adresiniz</label>
                                    <input type="email" class="form-control" id="subscribe2" placeholder="E-posta Adresiniz" name="subscribe_email" required="">
                                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                                <button type="submit" class="btn btn-gray-transparent btn-animated margin-clear">Abone Ol <i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<!-- section end -->