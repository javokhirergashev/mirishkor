<section class="divider fullscreen">
    <div class="container pb-0 pb-lg-90">
        <div class="section-content">
            <div class="row align-items-center">
                <div class="col-sm-12 col-lg-4 hidden-md-down">
                    <img width="340" height="464" src="/frontend-files/images/about/5.png" class="attachment-large mt-30" alt="images"/>
                </div>

                <?php if (!empty($contacts)): ?>
                    <?php foreach ($contacts as $contact): ?>
                        <div class="mb-md-30 col-sm-12 col-lg-4 col-md-6">
                            <h2> <?= Yii::t("app", "contacts") ?></h2>
                            <h4 class="text-gray mt-0 mb-40"> <?= Yii::t("app", "contact1") ?></h4>
                            <div class="icon-box icon-left iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-25">
                                <div class="icon-box-wrapper">
                                    <div class="icon-wrapper">
                                        <a class="icon icon-dark icon-type-font-icon"> <i class="flaticon-contact-044-call-1"></i> </a>
                                    </div>
                                    <div class="icon-text">
                                        <h5 class="icon-box-title mt-0"> <?= Yii::t("app", "phone") ?></h5>
                                        <div class="content"><a href="tel:<?= $contact->first_phone ?>"><?= $contact->first_phone ?></a></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="icon-box icon-left iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-25">
                                <div class="icon-box-wrapper">
                                    <div class="icon-wrapper">
                                        <a class="icon icon-dark icon-type-font-icon"> <i class="flaticon-contact-043-email-1"></i> </a>
                                    </div>
                                    <div class="icon-text">
                                        <h5 class="icon-box-title mt-0"> <?= Yii::t("app", "email") ?></h5>
                                        <div class="content"><a href="mailto:<?= $contact->email ?>"><?= $contact->email ?></a></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="icon-box icon-left iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-40">
                                <div class="icon-box-wrapper">
                                    <div class="icon-wrapper">
                                        <a class="icon icon-dark icon-type-font-icon"> <i class="flaticon-contact-025-world"></i> </a>
                                    </div>
                                    <div class="icon-text">
                                        <h5 class="icon-box-title mt-0"> <?= Yii::t("app", "address") ?></h5>
                                        <div class="content"><?= $contact->address ?></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>