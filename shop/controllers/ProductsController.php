<?php
namespace shop\controllers;

use shop\models\Product;
// use shop\helper\Category as helperProduct;

class ProductsController extends BaseController
{
    public function allAction()
    {
        $helperProduct = new \shop\helper\Product();
        $productModel = new Product();
        $limit = (int) 2;
        if (isset($_GET['limit'])){
            $limit = $_GET['limit'];
        };
        $this->render(
            'product/all',
            array(
                'products' => $productModel->getProducts(),
            )
        );
    }

    public function showAction()
    {
        $this->render('product/show');
    }
}