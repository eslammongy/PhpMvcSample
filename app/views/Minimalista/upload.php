<?php $this->getView("Minimalista/header", $data); ?>
<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <header class="section-top-padding background-white">
        <div class="line text-center">
        </div>
    </header>
    <section class="section background-white">
        <div class="s-12 m-12 l-4 center">
            <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Contact Us</h4>
            <form name="contactForm" class="customform" method="post">
                <div class="s-12">
                    <div class="margin">
                        <div class="s-12 m-12 l-6">
                            <input name="email" class="required email" placeholder="Your e-mail" title="Your e-mail"
                                type="text">
                            <p class="email-error form-error">Please enter your e-mail.</p>
                        </div>
                        <div class="s-12 m-12 l-6">
                            <input name="name" class="name" placeholder="Your name" title="Your name" type="text">
                            <p class="name-error form-error">Please enter your name.</p>
                        </div>
                    </div>
                </div>
                <div class="s-12">
                    <input name="subject" class="subject" placeholder="Subject" title="Subject" type="text">
                    <p class="subject-error form-error">Please enter the subject.</p>
                </div>
                <div class="s-12">
                    <input name="image" class="image" placeholder="image" title="Image" type="file">
                    <p class="subject-error form-error">Please upload the image.</p>
                </div>
                <div class="s-12">
                    <textarea name="message" class="required message" placeholder="Your message" rows="3"></textarea>
                    <p class="message-error form-error">Please enter your message.</p>
                </div>
                <div class="s-12"><button class="s-12 submit-form button background-primary text-white"
                        type="submit">Submit Button</button></div>
            </form>
        </div>
    </section>

</main>

<!-- FOOTER -->
<?php $this->getView("Minimalista/footer", $data); ?>