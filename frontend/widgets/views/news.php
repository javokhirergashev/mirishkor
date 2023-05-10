<section>
    <div class="container pt-90">
        <div class="section-title">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="text-center mb-60">
                        <div class="tm-sc-section-title section-title section-title-style1 text-center">
                            <div class="title-wrapper">
                                <h2 class="title icon-bottom"> <span class=""> </span> <span class="text-theme-colored1"><?= Yii::t("app", "news") ?></span></h2>
                                <div class="title-seperator-line"></div>
                                <div class="paragraph">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <!-- Isotope Gallery Grid -->
                    <div id="gallery-holder-618422" class="isotope-layout masonry grid-3 gutter-15 clearfix lightgallery-lightbox">
                        <div class="isotope-layout-inner">
                            <div class="isotope-item isotope-item-sizer"></div>

                            <?php if (!empty($models)): ?>
                                <?php foreach ($models

                                as $model): ?>
                                <?php
                                $img = \common\models\StaticFunctions::getImage('news', $model->id, $model->image);
                                ?>
                                    <!-- Isotope Item Start -->
                                    <div class="isotope-item">
                                        <div class="isotope-item-inner">
                                            <div class="tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                                                <article class="post type-post status-publish format-standard has-post-thumbnail">
                                                    <div class="entry-header">
                                                        <div class="post-thumb lightgallery-lightbox">
                                                            <div class="post-thumb-inner">
                                                                <div class="thumb"> <img src="<?= $img ?>" alt="Image"/></div>
                                                            </div>
                                                        </div>
                                                        <a class="link" href="<?=yii\helpers\Url::to(['newsview/view', "id"=>$model->id]);?>"><i class="fa fa-link"></i></a>
                                                    </div>
                                                    <div class="entry-content">
                                                        <h5 class="entry-title"><a href="<?=yii\helpers\Url::to(['newsview/view', "id"=>$model->id]);?>" rel="bookmark"><?= $model->getTitle() ?></a></h5>
                                                        <div class="entry-meta mt-0">
                                                            <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored1"></i> Jul 20, 2021</span>
                                                            <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-comments mr-10 text-theme-colored1"></i> 214 Comments</span>
                                                        </div>

                                                        <div class="post-excerpt">
                                                        </div>
                                                        <div class="post-btn-readmore"> <a href="<?=yii\helpers\Url::to(['newsview/view', "id"=>$model->id]);?>" class="btn btn-plain-text-with-arrow">  <?= Yii::t("app", "more") ?> </a></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                            <!-- Isotope Item End -->

                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- End Isotope Gallery Grid -->
                </div>
            </div>
        </div>
    </div>
    </div>
</section>