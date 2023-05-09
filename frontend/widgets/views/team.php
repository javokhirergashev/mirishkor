<section class="">
    <div class="container">
        <div class="section-title">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="text-center mb-60">
                        <div class="tm-sc-section-title section-title section-title-style1 text-center">
                            <div class="title-wrapper">
                                <h2 class="title icon-bottom"> <span class=""></span> <span class="text-theme-colored1"><?= Yii::t("app", "team") ?></span></h2>
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
                <div class="col-sm-12">
                    <div class="tm-sc-staff tm-sc-staff-carousel staff-style3-modern owl-dots-light-skin owl-dots-center">
                        <!-- Isotope Gallery Grid -->
                        <div id="staff-holder-945632" class="owl-carousel owl-theme tm-owl-carousel-4col" data-nav="true" data-autoplay="true" data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30" data-stagepadding="0">
                            <!-- the loop -->
                            <?php if (!empty($models)): ?>
                            <?php foreach ($models as $model): ?>
                            <?php
                            $img = \common\models\StaticFunctions::getImage('user', $model->id, $model->image);
                            ?>
                                    <div class="tm-carousel-item">
                                        <div class="tm-staff">
                                            <div class="staff-inner">
                                                <div class="box-hover-effect">
                                                    <div class="staff-header effect-wrapper">
                                                        <div class="thumb">
                                                            <img src="<?= $img ?>" class="img-fullwidth" alt="images"/>
                                                        </div>
                                                        <div class="overlay-shade shade-white"></div>
                                                        <div class="icons-holder icons-holder-middle">
                                                            <div class="icons-holder-inner">
                                                                <ul class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                                                    <li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-link"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="staff-content">
                                                        <h5 class="name"><a href="#"><?= $model->firstname ?> <?= $model->lastname ?></a></h5>
                                                        <div class="speciality">Dentist</div>
                                                        <ul class="contact-info"></ul>
                                                        <div class="staff-working-hours">
                                                            <ul class="working-hours">
                                                                <li class="clearfix">
                                                                    <span>Monday - Friday</span>
                                                                    <div class="value">8.00 - 17.00</div>
                                                                </li>
                                                                <li class="clearfix">
                                                                    <span>Saturday</span>
                                                                    <div class="value">9.00 - 16.00</div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
                                                            <li><a class="styled-icons-item" target="_blank" href="<?= $model->telegram_link ?>"><i class="fab fa-telegram"></i></a></li>
                                                            <li><a class="styled-icons-item" target="_blank" href="<?= $model->facebook_link ?>"><i class="fab fa-facebook"></i></a></li>
                                                             </ul>
                                                        <div class="staff-btn">
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>