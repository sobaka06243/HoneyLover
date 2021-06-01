<?php
$productsInCart = self::getProducts();
if ($productsInCart) {
    $productsId = array_keys($productsInCart);
    $products = Product::getProductsById($productsId);

    $totalPrice = Cart::getTotalPrice($products);
}
if ($productsInCart) {
    echo "<table class='table-bordered table-striped table'>";
    echo "<tr>";
    echo "<th>Код товара</th>";
    echo "<th>Название</th>";
    echo "<th>Стомость, руб</th>";
    echo " <th>Количество, шт</th>";
    echo "<th>Удалить</th>";
    echo "</tr>";
    foreach ($products as $product) {
        echo "<tr>";
        echo "<td>" . $product['code'] . "</td>";
        echo "<td>";
        echo " <a href='/product/" . $product['id'] . "'>";
        echo $product['name'];
        echo "  </a>";
        echo " </td>";
        echo "  <td>" . $product['price'] . "</td>";
        echo " <td>" . $productsInCart[$product['id']] . "</td>";
        echo "<td>";
        echo "<a href='/cart/deleteAjax/" . $product['id'] . "' class='delete-product' data-id='" . $product['id'] . "'>";
        echo "<i class='fa fa-times'></i>";
        echo " </a>";
        echo " </td>";
        echo "</tr>";
    }
    echo " <tr>";
    echo " <td colspan='4'>Общая стоимость:</td>";
    echo "<td>" . $totalPrice . "</td>";
    echo " </tr>";

    echo "  </table>";
} else {
    echo " <p>Коризина пуста</p>";
}
