<section>
    <div class="container">
        <div class="tm-sc-section-title section-title section-title-style1 text-center">
            <div class="title-wrapper">
                <h2 class="title icon-bottom"> <span class=""></span> <span class="text-theme-colored1"><?= Yii::t("app", "service0") ?></span></h2>
                <div class="title-seperator-line"></div>
                <div class="paragraph">
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                <?php if (!empty($models)): ?>
                    <?php foreach ($models as $model): ?>
                    <?php
                    $img = \common\models\StaticFunctions::getImage('service', $model->id, $model->image);
                    ?>
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="tm-sc-services services-style-current-theme2">
                                <div class="tm-service">
                                    <div class="thumb">
                                        <img src="<?= $img ?>" alt="image">
                                        <a href="#" class="icon bg-theme-colored1"><i class="flaticon-medical-ambulance14"></i></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="mt-0 font-20"><?= $model->getServiceName() ?></h4>
                                        <p><?= $model->getServiceDescription() ?></p>
                                        <a class="text-black-999 text-hover-theme-colored1" href="#"><i class="fa fa-angle-double-right"></i> Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>