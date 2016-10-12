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
        $limit = (int) 2;
        if (isset($_GET['limit'])){
            $limit = $_GET['limit'];
        }
        $this->render(
            'products/all',
            array(
                'products' => $productModel->getProducts($limit),
            )
        );
    }

    public function showAction()
    {
        $this->render('products/show');
    }
}