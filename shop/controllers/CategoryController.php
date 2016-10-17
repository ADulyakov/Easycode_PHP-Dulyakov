<?php
namespace shop\controllers;

use shop\models\Category;

class CategoryController extends BaseController
{
    public function allAction()
    {
        $helperCategory = new \shop\helper\Category();
        $categoryModel = new Category();
        $limit =(int) 2;
        if (isset ($_GET['limit'])){
            $limit = $_GET['limit'];
        };

        $this->render(
            'category/all',
            array(
                'categories' => $categoryModel->getCategories(),
            )
        );
    }

    public function showAction()
    {
        $this->render('category/show');
    }
}