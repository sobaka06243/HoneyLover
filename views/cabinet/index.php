<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <br>
                <br>
                <br>
                <br>
                <h3>Кабинет пользователя</h3>
                <h2>Привет, <?php echo $user['name'];?></h2>
                <p><a href="#">Редактировать данные</a></p>
                <p><a href="#">Список покупок</a></p>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>