<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/admin">Админпанель/</a></li>
                        <li><a href="/admin/product">Управление товарами/</a></li>
                        <li class="active">Редактировать товар</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">


                <h4>Добавить новый товар</h4>



                <?php if (isset($errors) && is_array($errors)) : ?>
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="col-lg-4">
                    <div class="login-form">
                        <form action="#" method="post" enctype="multipart/form-data">

                            <p>Название товара</p>
                            <input type="text" name="name" placeholder="" value="">

                            <p>Артикул</p>
                            <input type="text" name="code" placeholder="" value="">

                            <p>Стоимость, $</p>
                            <input type="text" name="price" placeholder="" value="">

                            <p>Категория</p>
                            <select name="category_id">
                                <?php if (is_array($categoriesList)) : ?>
                                    <?php foreach ($categoriesList as $category) : ?>
                                        <option value="<?php echo $category['id']; ?>">
                                            <?php echo $category['name']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>





                            <p>Изображение товара</p>
                            <input type="file" name="image" placeholder="" value="">

                            <p>Детальное описание</p>
                            <textarea name="description"></textarea>



                            <p>Наличие на складе</p>
                            <select name="availability">
                                <option value="1" selected="selected">Да</option>
                                <option value="0">Нет</option>
                            </select>



                            <p>Популярные</p>
                            <select name="is_popular">
                                <option value="1" selected="selected">Да</option>
                                <option value="0">Нет</option>
                            </select>



                            <p>Статус</p>
                            <select name="status">
                                <option value="1" selected="selected">Отображается</option>
                                <option value="0">Скрыт</option>
                            </select>


                            <br>
                            <br>
                            <input type="submit" name="submit" class="btn btn-default" value="Сохранить">



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

