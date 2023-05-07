<section class="blog-wrap pt-100 pb-75 bg-athens">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3  col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="section-title style1 text-center mb-40">
                    <h2><?= Yii::t("app", "news") ?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php if (!empty($models)): ?>
                <?php foreach ($models

                               as $model): ?>
                    <?php
                    $img = \common\models\StaticFunctions::getImage('news', $model->id, $model->image);
                    ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 aos-init aos-animate" data-aos="fade-up"
                         data-aos-duration="1200" data-aos-delay="200">
                        <div class="blog-card style3">
                            <div class="blog-img">
                                <img src="<?= $img ?>" alt="Image">
                            </div>
                            <div class="blog-info">
                                <h3><a href="<?=yii\helpers\Url::to(['newsview/view', "id"=>$model->id]);?>"><?= $model->getTitle() ?> </a></h3>
                                <a href="<?=yii\helpers\Url::to(['newsview/view', "id"=>$model->id]);?>" class="link style2"><?= Yii::t("app", "read_more") ?><i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</section>