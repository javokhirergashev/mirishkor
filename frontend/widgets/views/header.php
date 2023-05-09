<header id="header" class="header header-layout-type-header-2rows-floating-header-style3 header-bg-dark-shadow">
    <div class="header-nav mt-0">
        <div class="header-nav-wrapper navbar-scrolltofixed">
            <div class="menuzord-container header-nav-container">
                <div class="container position-relative">
                    <div class="row header-nav-col-row">
                        <div class="col-sm-auto align-self-center">
                            <a class="menuzord-brand site-brand" href="index-mp-layout1.html">
                                <img class="logo-light logo-default logo-1x" src="/frontend-files/images/logo.png" alt="Logo">
                                <img class="logo-light logo-default logo-2x retina" src="/frontend-files/images/logo.png" alt="Logo">

                                <img class="logo-dark logo-default logo-1x" src="/frontend-files/images/logo-wide.png" alt="Logo">
                                <img class="logo-dark logo-default logo-2x retina" src="/frontend-files/images/logo-wide%402x.png" alt="Logo">
                            </a>
                        </div>
                        <div class="col-sm-auto ms-auto pr-0 align-self-center">
                            <nav id="top-primary-nav" class="menuzord theme-color2" data-effect="slide" data-animation="none" data-align="right">
                                <ul id="main-nav" class="menuzord-menu">
                                    <?php if (!empty($models)): ?>
                                        <?php foreach ($models as $model): ?>
                                            <li class="menu-item">
                                                <a href="<?= $model->link ?>"><?= $model->getName() ?></a>
                                            </li>
                                        <?php endforeach ?>
                                    <?php endif; ?>

                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-auto align-self-center nav-side-icon-parent">
                            <ul class="list-inline nav-side-icon-list">
                                <li class="hidden-mobile-mode">
                                    <div class="top-nav-mini-cart-icon-container">
                                        <div class="top-nav-mini-cart-icon-contents">
                                            <div  class="language-sh"  title="">
                                                <i style="font-size: 28px; color: white;" class="lan-icon fa fa-language" ></i>                       </div>
                                            <div style="padding: 0px!important; width: 150px;" class="dropdown-content">
                                                <ul class="cart_list product_list_widget">
                                                    <li style="padding: 15px; font-size: 18px" class="mini_cart_item">
                                                        <?php
                                                        foreach (Yii::$app->params['languages'] as $key => $value) {
                                                            echo " <a class='dropdown-item' href='" . \yii\helpers\Url::current(['language' => $value]) . "'>$value</a>";
                                                        }
                                                        ?>
                                                    </li>
                                                </ul>
                                                <div class="row">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div id="top-nav-search-form" class="clearfix">
                                <form action="#" method="GET">
                                    <input type="text" name="s" value="" placeholder="Type and Press Enter..." autocomplete="off" />
                                </form>
                                <a href="#" id="close-search-btn"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row d-block d-xl-none">
                        <div class="col-12">
                            <nav id="top-primary-nav-clone" class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive" data-effect="slide" data-animation="none" data-align="right">
                                <ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable">
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <!-- owl-animated-slider -->
    <div class="tm-owl-slider">
        <div class="slider-wrapper tm-owl-carousel-1col owl-theme owl-carousel" data-dots="true" data-nav="true" data-duration="12000">
            <div class="slide-item fullscreen d-flex align-items-center">
                <div class="image-layer" data-tm-bg-img="/frontend-files/images/bg/bg1.jpg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="content-box section-typo-light">
                                <h1 class="title mt-0" data-tm-font-size="4rem"><?= Yii::t("app", "slider1") ?></h1>
                                <p class="paragraph"><?= Yii::t("app", "slider2") ?></p>
                                <div class="btn-wrapper">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item fullscreen d-flex align-items-center">
                <div class="image-layer" data-tm-bg-img="/frontend-files/images/bg/bg2.jpg"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="content-box section-typo-light text-center">
                                <h4 class="sub-title mb-0"></h4>
                                <h1 class="title mt-0" data-tm-font-size="4rem"><?= Yii::t("app", "slider1") ?></h1>
                                <p class="paragraph"><?= Yii::t("app", "slider2") ?></p>
                                <div class="btn-wrapper">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
