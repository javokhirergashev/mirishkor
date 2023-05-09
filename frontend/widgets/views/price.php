<section data-tm-bg-img="images/pattern/p4.png">
    <div class="container pt-90">
        <div class="section-title">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="text-center mb-100">
                        <div class="tm-sc-section-title section-title section-title-style1 text-center">
                            <div class="title-wrapper">
                                <h2 class="title icon-bottom"> <span class=""> </span> <span class="text-theme-colored1"><?= Yii::t("app", "price") ?></span> <span class=""></span></h2>
                                <div class="title-seperator-line"></div>
                                <div class="paragraph">
                                    <p>Explore Our Completed Projects! Consectetur adipiscing elitt elit tellus, luctus pulvinar dapibus leoconsectetur luctus nec.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                <?php if (!empty($models)): ?>
                <?php foreach ($models as $model): ?>
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="tm-sc-pricing-table has-label pricing-table-style1 pricing-list-bordered pricing-table-box-shadow text-center mb-lg-60">
                                <div class="pricing-table-thumb">
                                    <div class="thumb"><img src="/frontend-files/images/icon/i3.png" alt="Image"></div>
                                </div>
                                <div class="pricing-table-inner-wrapper">
                                    <div class="pricing-table-inner">
                                        <div class="pricing-table-head">
                                            <div class="pricing-table-title-area">
                                                <h4 class="pricing-table-title"> <?= $model->getServiceName() ?></h4>
                                                <h5 class="pricing-table-subtitle">Hurry to grap your offer now</h5>
                                            </div>
                                            <div class="pricing-table-pricing"> <span class="pricing-table-prefix"></span> <span class="pricing-table-price" ><?= $model->price ?> UZS</span></div>
                                        </div>
                                        <div class="pricing-table-content">
                                            <p><strong><span class="text-theme-colored1 font-size-24">15%</span></strong> Discount</p>
                                        </div>
                                        <div class="pricing-table-footer">
                                            <div class="btn-view-details text-center"> <a href="#" target="_self" class="btn btn-theme-colored1 btn-sm"> Get Offer </a></div>
                                        </div>
                                        <span class="pricing-table-label">label</span>
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