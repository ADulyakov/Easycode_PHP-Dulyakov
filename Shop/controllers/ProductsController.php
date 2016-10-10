<?php
require_once 'BaseController.php';
require_once 'models/Products.php';

class ProductsController extends BaseController
{

    public function allAction()
    {
        $productsModel = new Product();

        $this->render(
            'products/all',
            array(
                'products' => $productsModel->getProducts(),
            )
        );
    }

    public function showAction()
    {
        $this->render('products/show');
    }
}