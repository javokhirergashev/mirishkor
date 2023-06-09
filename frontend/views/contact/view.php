<section class="contact-us-wrap ptb-100">
    <?php if (!empty($contacts)): ?>
        <?php foreach ($contacts as $contact): ?>
            <div class="container">
                <div class="row justify-content-center pb-75">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="flaticon-map"></i>
                                    </span>
                            <div class="contact-info">
                                <h3><?= Yii::t("app", "visit") ?></h3>
                                <p><?= $contact->getAddress() ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="flaticon-email-2"></i>
                                    </span>
                            <div class="contact-info">
                                <h3><?= Yii::t("app", "send_email") ?></h3>
                                <a href="mailto:<?= $contact->email ?>"><?= $contact->email ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="flaticon-call"></i>
                                    </span>
                            <div class="contact-info">
                                <h3><?= Yii::t("app", "call_center") ?></h3>
                                <a href="<?= $contact->first_phone ?>"><?= $contact->first_phone ?></a>
                                <a href="<?= $contact->second_phone ?>"><?= $contact->second_phone ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="contact-form">
                            <h3>Send Us A Message</h3>
                            <form class="form-wrap" id="contactForm" novalidate="true">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name*" id="name" required=""
                                                   data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" required="" placeholder="Email*"
                                                   data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="phone" id="phone" required=""
                                                   placeholder="Phone Number*" data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" placeholder="Subject*"
                                                   id="msg_subject" required="" data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group v1">
                                            <textarea name="message" id="message" placeholder="Your Messages.."
                                                      cols="30" rows="10" required=""
                                                      data-error="Please enter your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check checkbox">
                                            <input name="gridCheck" value="I agree to the terms and privacy policy."
                                                   class="form-check-input" type="checkbox" id="gridCheck" required="">
                                            <label class="form-check-label" for="gridCheck">
                                                I agree to the <a class="link style1" href="terms-of-service.html">terms
                                                    &amp; conditions</a> and <a class="link style1"
                                                                                href="privacy-policy.html">privacy
                                                    policy</a>
                                            </label>
                                            <div class="help-block with-errors gridCheck-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn style1 disabled"
                                                style="pointer-events: all; cursor: pointer;">Send Message
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div class="comp-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    <?php endif; ?>
</section>