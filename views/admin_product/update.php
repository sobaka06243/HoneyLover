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
                <h4>Редактировать товар #<?php echo $id; ?></h4>


                <div class="col-lg-4">
                    <div class="login-form">
                        <form action="#" method="post" enctype="multipart/form-data">

                            <p>Название товара</p>
                            <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">

                            <p>Артикул</p>
                            <input type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>">

                            <p>Стоимость, $</p>
                            <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>">

                            <p>Категория</p>
                            <select name="category_id">
                                <?php if (is_array($categoriesList)) : ?>
                                    <?php foreach ($categoriesList as $category) : ?>
                                        <option value="<?php echo $category['id']; ?>" <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                            <?php echo $category['name']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>



                            <p>Изображение товара</p>
                            <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="" />
                            <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>">

                            <p>Детальное описание</p>
                            <textarea name="description"><?php echo $product['description']; ?></textarea>


                            <p>Наличие на складе</p>
                            <select name="availability">
                                <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Да</option>
                                <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                            </select>


                            <p>Популярный</p>
                            <select name="is_popular">
                                <option value="1" <?php if ($product['is_popular'] == 1) echo ' selected="selected"'; ?>>Да</option>
                                <option value="0" <?php if ($product['is_popular'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                            </select>



                            <p>Статус</p>
                            <select name="status">
                                <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                                <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
                            </select>

                            <br><br>

                            <input type="submit" name="submit" class="btn btn-default" value="Сохранить">


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

