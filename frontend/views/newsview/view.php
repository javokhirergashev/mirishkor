<div class="blog-details-wrap ptb-100">
    <div class="container">
        <div class="row gx-5">
            <div class="col-xl-10 offset-xl-1 col-lg-12">
                <article>
                    <div class="post-img">
                        <img src="<?= $image ?>" alt="Image">
                    </div>
                    <h1><?= $model->getTitle() ?></h1>
                    <div class="post-para">
                        <p><?= $model->getBody() ?></p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>