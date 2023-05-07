<!-- Team Section Start -->
<section class="team-wrap ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 offset-xl-3 col-xl-8 offset-xl-2 col-lg-8 offset-lg-2  col-md-10 offset-md-1"
                 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <div class="section-title style1 text-center mb-40">
                    <span> <?= Yii::t("app", "team") ?></span>
                    <h2> <?= Yii::t("app", "team1") ?></h2>
                </div>
            </div>
        </div>
        <div class="team-slider-one style2 owl-carousel">
            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model): ?>
                    <?php
                    $img = \common\models\StaticFunctions::getImage('user', $model->id, $model->image);
                    ?>
                    <div class="team-card style2" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <img src="<?= $img ?>" alt="Image">
                        <div class="team-info">
                            <h3><?= $model->firstname ?> <?= $model->lastname ?></h3>
                            <span>Shifokor</span>
                            <ul class="social-profile style2 list-style">
                                <li>
                                    <a target="_blank" href="<?= $model->facebook_link ?>">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="<?= $model->telegram_link ?>">
                                        <i class="ri-telegram-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</section>
<!-- Team Section End -->