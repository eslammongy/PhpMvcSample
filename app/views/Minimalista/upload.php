<?php $this->getView("Minimalista/header", $data); ?>
<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <header class="section-top-padding background-white">
        <div class="line text-center">
        </div>
    </header>
    <section class="section background-white">
        <p>
            <?php checkErrorMsg();
            ?>
        </p>
        <div class="s-12 m-12 l-4 center">
            <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Upload Image</h4>
            <form name="contactForm" class="customform" method="post" enctype="multipart/form-data">

                <div class="s-12">
                    <input name="title" class="title" placeholder="Title" title="title" type="text">
                    <p class="subject-error form-error">Please enter the title.</p>
                </div>
                <div class="s-12">
                    <input name="image" class="image" placeholder="image" title="Image" type="file">
                    <p class="subject-error form-error">Please upload the image.</p>
                </div>
                <div class="s-12">
                    <textarea name="description" class="required message" placeholder="Your description"
                        rows="3"></textarea>
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