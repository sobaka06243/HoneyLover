<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <br />
                <br />
                <br />
                <br />
                <div class="auth">
                    <?php if (isset($errors) && is_array($errors)) : ?>
                        <ul>
                            <?php foreach ($errors as $error) : ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <div class="signup-form">
                        <br />
                        <br />
                        <br />
                        <br />

                        <h2 class="active"><a href="/user/login"> Вход</a></h2>
                        <h2><a href="/user/register/"> Регистрация</a></h2>
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
                            <input type="submit" name="submit" class="btn btn-default" value="Вход">
                        </form>

                    </div>
                </div>
                <br />
                <br />
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>