<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'BaseController.php';
require_once 'models/Product.php';

class ProductsController extends BaseController
{

    public function allAction()
    {
        $productModel = new Product();

        $this->render(
            'products/all',
            array(
                'products' => $productModel->getProducts(),
            )
        );
    }

    public function showAction()
    {
        $this->render('products/show');
    }
}