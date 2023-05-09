<header id="header" class="header header-layout-type-header-2rows-floating-header-style3 header-bg-dark-shadow">
    <div class="header-nav mt-0">
        <div class="header-nav-wrapper navbar-scrolltofixed">
            <div class="menuzord-container header-nav-container">
                <div class="container position-relative">
                    <div class="row header-nav-col-row">
                        <div class="col-sm-auto align-self-center">
                            <a class="menuzord-brand site-brand" href="index-mp-layout1.html">
                                <img class="logo-light logo-default logo-1x" src="/frontend-files/images/logo-wide-white.png" alt="Logo">
                                <img class="logo-light logo-default logo-2x retina" src="/frontend-files/images/logo-wide-white%402x.png" alt="Logo">

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
                                <li class="hidden-mobile-mode"><a href="#" id="top-nav-search-btn"><i class="search-icon fa fa-search"></i></a></li>
                                <li class="hidden-mobile-mode">
                                    <div class="top-nav-mini-cart-icon-container">
                                        <div class="top-nav-mini-cart-icon-contents">
                                            <a class="mini-cart-icon" href="shop-cart.html" title="View your shopping cart">
                                                <img src="/frontend-files/images/shopping-cart.png" width="25" alt="cart"><span class="items-count">1</span> <span class="cart-quick-info">1 item - <span class="amount"><span class="currencySymbol">&pound;</span>18.00</span></span>
                                            </a>
                                            <div class="dropdown-content">
                                                <ul class="cart_list product_list_widget">
                                                    <li class="mini_cart_item">
                                                        <a href="#" class="remove remove_from_cart_button" aria-label="Remove this item" data-product_id="18832" data-cart_item_key="#" data-product_sku="woo-beanie">&times;</a>
                                                        <a href="#"> <img class="attachment-thumbnail" src="/frontend-files/images/shop/product.jpg" width="300" height="300" alt="images"/>Beanie</a>
                                                        <span class="quantity">1 &times; <span class="amount">
                              <span class="currencySymbol">&pound;</span>18.00</span></span>
                                                    </li>
                                                </ul>
                                                <p class="total"> <strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><span class="currencySymbol">&pound;</span>18.00</span> </p>
                                                <div class="buttons cart-action-buttons">
                                                    <div class="row">
                                                        <div class="col-6 pe-0"><a href="shop-cart.html" class="btn btn-theme-colored2 btn-block btn-sm wc-forward">View Cart</a></div>
                                                        <div class="col-6 pe-1"><a href="shop-checkout.html" class="btn btn-theme-colored1 btn-block btn-sm checkout wc-forward">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="hidden-mobile-mode">
                                    <div id="side-panel-trigger" class="side-panel-trigger">
                                        <a href="#">
                                            <div class="hamburger-box">
                                                <div class="hamburger-inner"></div>
                                            </div>
                                        </a>
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
                                <h4 class="sub-title mb-0">We Provide</h4>
                                <h1 class="title mt-0" data-tm-font-size="4rem">Total Health Care Solution</h1>
                                <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="btn-wrapper">
                                    <a href="#" class="btn btn-outline-light mr-10">Read More</a>
                                    <a href="#" class="btn btn-theme-colored2">Contact Us</a>
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
                                <h4 class="sub-title mb-0">This is subtitle</h4>
                                <h1 class="title mt-0" data-tm-font-size="4rem">Awesome Owl Slider in Action</h1>
                                <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="btn-wrapper">
                                    <a href="#" class="btn btn-outline-light mr-10">Read More</a>
                                    <a href="#" class="btn btn-theme-colored2">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item fullscreen d-flex align-items-center">
                <div class="image-layer" data-tm-bg-img="/frontend-files/images/bg/bg3.jpg"></div>
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <div class="content-box section-typo-light text-right">
                                <h4 class="sub-title mb-0">This is subtitle</h4>
                                <h1 class="title mt-0" data-tm-font-size="4rem">Awesome Owl Slider in Action</h1>
                                <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="btn-wrapper">
                                    <a href="#" class="btn btn-outline-light mr-10">Read More</a>
                                    <a href="#" class="btn btn-theme-colored2">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
