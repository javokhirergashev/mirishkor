<footer id="footer" class="footer">
    <div class="footer-widget-area">
        <div class="container pt-90 pb-60">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                        <div class="thumb">
                            <img alt="Logo" src="/frontend-files/images/logo-wide-white.png">
                        </div>
                        <div class="description"> <?= Yii::t("app", "slider2") ?></div>
                        <?php if (!empty($contacts)): ?>
                            <?php foreach ($contacts as $contact): ?>
                                <ul class="mb-30">
                                    <li class="contact-phone">
                                        <div class="icon"><i class="flaticon-contact-042-phone-1"></i></div>
                                        <div class="text"><a href="tel:<?= $contact->first_phone ?>"><?= $contact->first_phone ?></a></div>
                                    </li>
                                    <li class="contact-email">
                                        <div class="icon"><i class="flaticon-contact-043-email-1"></i></div>
                                        <div class="text"><a href="mailto:<?= $contact->email ?>"><?= $contact->email ?></a></div>
                                    </li>
                                    <li class="contact-address">
                                        <div class="icon"><i class="flaticon-contact-047-location"></i></div>
                                        <div class="text"><?= $contact->address?></div>
                                    </li>
                                </ul>
                            <?php endforeach ?>
                        <?php endif; ?>
                    </div>
                    <ul class="styled-icons icon-dark icon-theme-colored1 icon-rounded clearfix">
                        <li><a class="social-link" href="#" ><i class="fab fa-facebook"></i></a></li>
                        <li><a class="social-link" href="#" ><i class="fab fa-twitter"></i></a></li>
                        <li><a class="social-link" href="#" ><i class="fab fa-youtube"></i></a></li>
                        <li><a class="social-link" href="#" ><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-1">

                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1"><?= Yii::t("app", "links") ?></h4>
                        <ul>
                            <?php if (!empty($models)): ?>
                            <?php foreach ($models as $model): ?>
                                 <li><a href="<?= $model->link ?>"><?= $model->getName() ?></a></li>
                                <?php endforeach ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget">
                        <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1"><?= Yii::t("app", "schedule") ?></h4>
                        <div class="opening-hours border-dark">
                            <ul>
                                <li class="clearfix"> <span> <?= Yii::t("app", "schedule1") ?>  </span>
                                    <div class="value"> 10.00  - 18.00  </div>
                                </li>
                                <li class="clearfix"> <span><?= Yii::t("app", "schedule2") ?></span>
                                    <div class="value"> 8.00  - 19.00  </div>
                                </li>
                                <li class="clearfix"> <span> <?= Yii::t("app", "sunday") ?> </span>
                                    <div class="value"> <?= Yii::t("app", "sunday1") ?> </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" data-tm-bg-color="#2A2A2A">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-sm-6">
                        <div class="footer-paragraph">
                            © 2023 WEBSPACE. All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-paragraph text-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>