<!-- Header Section Start -->
<header class="header-wrap style3">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="header-top-left">
                        <ul class="contact-info list-style">
                            <li>
                                <span><i class="ri-map-pin-fill"></i></span>
                                <p><?= Yii::t("app", "organization") ?></p>
                            </li>
                            <?php if (!empty($contacts)): ?>
                                <?php foreach ($contacts as $contact): ?>
                                    <li>
                                        <span><i class="ri-phone-fill"></i></span>
                                        <a href="tel:<?= $contact->first_phone ?>"><?= $contact->first_phone ?></a>
                                    </li>
                                <?php endforeach ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="header-top-right">
                        <div class="select-lang">
                            <i class="ri-earth-fill"></i>
                            <div class="navbar-option-item navbar-language dropdown language-option">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class=""><?= Yii::$app->language ?></span>
                                </button>
                                <div class="dropdown-menu language-dropdown-menu">

                                    <?php
                                    foreach (Yii::$app->params['languages'] as $key => $value) {
                                        echo " <a class='dropdown-item' href='" . \yii\helpers\Url::current(['language' => $value]) . "'>$value</a>";
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <ul class="social-profile list-style style1">
                            <li>
                                <a href="https://facebook.com/">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://linkedin.com/">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://pinterest.com/">
                                    <i class="ri-pinterest-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-bottom">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="https://namvbkttm.uz/">
                    <img class="logo-light" src="/frontend-files/img/logo.jpg" alt="logo"
                         style="width: 150px; height: auto">
                    <img class="logo-dark" src="/frontend-files/img/logo-dark.png" alt="logo"
                         style="width: 150px; height: auto">
                </a>
                <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                    <div class="menu-close d-lg-none">
                        <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                    </div>
                    <ul class="navbar-nav ms-auto">

                        <?php if (!empty($models)): ?>
                            <?php foreach ($models as $model): ?>
                                <li class="nav-item">
                                    <a href="<?= $model->link ?>" class="nav-link"><?= $model->getName() ?></a>
                                </li>
                            <?php endforeach ?>
                        <?php endif; ?>
                    </ul>
                    <div class="other-options md-none">
                        <div class="option-item">
                            <button class="searchbtn"><i class="ri-search-line"></i></button>
                        </div>

                    </div>
                </div>
            </nav>
            <div class="search-area">
                <input type="search" placeholder="Search Here..">
                <button type="submit"><i class="ri-search-line"></i></button>
            </div>
            <div class="mobile-bar-wrap">
                <button class="searchbtn d-lg-none"><i class="ri-search-line"></i></button>
                <div class="mobile-menu d-lg-none">
                    <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Start -->
<section class="hero-wrap style6">
    <div class="hero-slider-three owl-carousel">
        <div class="hero-slide-item bg-one bg-f">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-speed="0.10" data-revert="true">
                            <h1>   <?= Yii::t("app", "slider1") ?></h1>
                            <p>   <?= Yii::t("app", "slider2") ?></p>
                            <div class="hero-btn">
                                <a href="about.html" class="btn style1">Find Out More</a>
                                <a class="play-video" data-fancybox=""
                                   href="https://youtu.be/hhy5v_yaqK0">
                                                <span class="video-icon">
                                                    <i class="ri-play-fill"></i>
                                                </span>
                                    <span> Watch Video</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide-item bg-two bg-f">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-speed="0.10" data-revert="true">
                            <h1> <?= Yii::t("app", "slider1") ?></h1>
                            <p> <?= Yii::t("app", "slider2") ?></p>
                            <div class="hero-btn">
                                <a href="about.html" class="btn style1">Find Out More</a>
                                <a class="play-video" data-fancybox=""
                                   href="https://www.youtube.com/watch?v=UNSSuTSQI9I">
                                                <span class="video-icon">
                                                    <i class="ri-play-fill"></i>
                                                </span>
                                    <span> Watch Video</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide-item bg-three bg-f">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-speed="0.10" data-revert="true">
                            <h1> <?= Yii::t("app", "slider1") ?></h1>
                            <p> <?= Yii::t("app", "slider2") ?></p>
                            <div class="hero-btn">
                                <a href="about.html" class="btn style1">Find Out More</a>
                                <a class="play-video" data-fancybox=""
                                   href="https://www.youtube.com/watch?v=UNSSuTSQI9I">
                                                <span class="video-icon">
                                                    <i class="ri-play-fill"></i>
                                                </span>
                                    <span> Watch Video</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->