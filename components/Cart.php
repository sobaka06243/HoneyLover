<?php

class Cart
{
    public static function addProduct($id)
    {
        // Приводим $id к типу integer
        $id = intval($id);

        // Пустой массив для товаров в корзине
        $productsInCart = array();

        // Если в корзине уже есть товары (они хранятся в сессии)
        if (isset($_SESSION['products'])) {
            // То заполним наш массив товарами
            $productsInCart = $_SESSION['products'];
        }

        // Проверяем есть ли уже такой товар в корзине 
        if (array_key_exists($id, $productsInCart)) {
            // Если такой товар есть в корзине, но был добавлен еще раз, увеличим количество на 1
            $productsInCart[$id]++;
        } else {
            // Если нет, добавляем id нового товара в корзину с количеством 1
            $productsInCart[$id] = 1;
        }

        // Записываем массив с товарами в сессию
        $_SESSION['products'] = $productsInCart;

        // Возвращаем количество товаров в корзине
        return self::countItems();
    }

    /**
     * Подсчет количество товаров в корзине (в сессии)
     * @return int <p>Количество товаров в корзине</p>
     */
    public static function countItems()
    {
        // Проверка наличия товаров в корзине
        if (isset($_SESSION['products'])) {
            // Если массив с товарами есть
            // Подсчитаем и вернем их количество
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            // Если товаров нет, вернем 0
            return 0;
        }
    }

    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();

        $total = 0;

        if ($productsInCart) {
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }

        return $total;
    }

    public static function deleteProduct($id)
    {
        $productsInCart = [];
        $productsInCart = $_SESSION['products'];
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]--;
        }
        if ($productsInCart[$id] <= 0) {
            unset($productsInCart[$id]);
        }
        $_SESSION['products'] = $productsInCart;
        return self::countItems();

    }

    public static function getTableProduct()
    {
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
            echo "<a class='btn btn-default checkout' href='/cart/checkout'><i class='fa fa-shopping-cart'></i> Оформить заказ</a>";

        } else {
            echo " <p>Коризина пуста</p>";
        }
    }

    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }

}
