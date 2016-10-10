<?php
require_once 'BaseController.php';
require_once 'models/All.php';

class ProductController extends BaseController
{

    public function allAction()
    {
        $categoryModel = new All();

        $this->render(
            'category/all',
            array(
                'categories' => $categoryModel->getProduct(),
            )
        );
    }

    public function showAction()
    {
        $this->render('category/show');
    }
}