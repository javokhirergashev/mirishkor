<!-- Service Section Start -->
<section class="service-wrap style3 ptb-100 bg-athens">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1" data-aos="fade-up"
                 data-aos-duration="1200" data-aos-delay="200">
                <div class="section-title style1 text-center mb-40">
                    <span> <?= Yii::t("app", "service0") ?></span>
                    <h2> <?= Yii::t("app", "service01") ?></h2>
                </div>
            </div>
        </div>
        <div class="service-slider-one style2 owl-carousel">
            <?php if (!empty($models)): ?>
            <?php foreach ($models as $model): ?>
                <?php
                    $img = \common\models\StaticFunctions::getImage('service', $model->id, $model->image);
                ?>
                    <div class="service-card style3" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                        <div class="service-img">
                            <img src="<?= $img ?>" alt="Image">
                            <span class="service-icon"><i class="flaticon-traumatology"></i></span>
                        </div>
                        <div class="service-info">
                            <h3><a href="service-details.html"></a></h3>
                            <p><?= $model->getServiceName() ?></p>
                            <p href="service-details.html" class="link style2"><?= $model->getServiceDescription() ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<!-- Service Section End -->
