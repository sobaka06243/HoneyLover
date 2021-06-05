<?php include ROOT . '/views/layouts/header.php'; ?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Задайте интересующий ваш вопрос или оставьте отзыв</h2>

            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="#" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" cols="30" rows="9" placeholder="Сообщение"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name"  type="text"  placeholder="Имя">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email"  type="email"  placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn" name="submit">Отправить</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

<?php include ROOT . '/views/layouts/footer.php'; ?>