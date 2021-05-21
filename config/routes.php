<?php

return array(
    'product/([0-9]+)' => 'product/view/$1', // actionView in ProductController

    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', //actionCategory in CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', //actionCategory in CatalogController

    'user/register' => 'user/register',

    '' => 'site/index', //actionIndex in SiteController 
);