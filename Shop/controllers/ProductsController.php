<?php
require_once 'BaseController.php';
require_once 'models/products.php';

class ProductController extends BaseController
{

    public function allAction()
    {
        $productsModel = new All();

        $this->render(
            'products/all',
            array(
                'categories' => $productsModel->getProducts(),
            )
        );
    }

    public function showAction()
    {
        $this->render('products/show');
    }
}