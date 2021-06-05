<?php

return array(
    'product/([0-9]+)' => 'product/view/$1', // actionView in ProductController

    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', //actionCategory in CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', //actionCategory in CatalogController
    'cart/checkout' => 'cart/checkout',  
    'cart/deleteAjax/([0-9]+)' => 'cart/deleteAjax/$1',

    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController
    'cart' => 'cart/index', // actionIndex в CartController

    'user/register' => 'user/register',
    'user/login' => 'user/login',

    'user/logout' => 'user/logout',
    'cabinet' => 'cabinet/index',



        // Управление товарами:    
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',
    // Управление категориями:    
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    // Управление заказами:    
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',
    // Админпанель:
    'category' => 'catalog/index', 

    'admin' => 'admin/index',

    'about' => 'about/index',

    'contacts' => 'contacts/index',

    'delivery' => 'delivery/index',

    'feedback' => 'feedback/index',

    '' => 'site/index', //actionIndex in SiteController 

);