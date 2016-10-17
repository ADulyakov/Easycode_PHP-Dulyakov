<?php
namespace shop\controllers;

class UserController extends BaseController

{
    public function allAction(){

        $helperCategory = new \shop\helper\User();
        $categoryModel = new User();
        $limit =(int) 2;
        if (isset ($_GET['limit'])){
            $limit = $_GET['limit'];
        };

        $this->render(
            'user/all',
            array(
                'user' => $categoryModel->getUser(),
            )
        );
    }

    public function showAction()
    {
        $this->render('user/show');
    }
}
