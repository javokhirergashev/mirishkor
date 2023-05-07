<section class="pricing-wrap pt-100 pb-75">
    <div class="container">
        <div class="section-title style1 text-center mb-40">
            <h2><?= Yii::t("app", "price") ?></h2>
        </div>
        <div class="row justify-content-center">
            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model): ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 aos-init aos-animate" data-aos="fade-up"
                         data-aos-duration="1200" data-aos-delay="200">
                        <div class="pricing-card">
                            <div class="pricing-header">
                                <div class="pricing-header-left">
                                    <h5><?= $model->getServiceName() ?></h5>
                                    <h2><?= $model->price ?><span>UZS</span></h2>
                                </div>
                                <div class="pricing-header-right">
                                    <i class="flaticon-clipboard"></i>
                                </div>
                            </div>
                            <ul class="pricing-features list-style">
                                <li class="checked">New Patient Consultation <i class="ri-check-line"></i></li>
                                <li class="checked">Regular health Checkup<i class="ri-check-line"></i></li>
                                <li class="checked">Ocupational Therapy<i class="ri-check-line"></i></li>
                                <li class="checked">Phusical Therapy<i class="ri-check-line"></i></li>
                            </ul>
                            <a href="<?php echo $checkout_url; ?>" class="btn style2"><?= Yii::t("app", "pay") ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>