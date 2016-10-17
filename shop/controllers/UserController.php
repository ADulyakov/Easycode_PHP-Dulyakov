<?php
namespace shop\controllers;

class UserController extends BaseController

{
    public function allAction(){

        $helperCategory = new \shop\helper\User();
        $userModel = new User();
        $limit =(int) 2;
        if (isset ($_GET['limit'])){
            $limit = $_GET['limit'];
        };

        $this->render(
            'user/all',
            array(
                'user' => $userModel->getUser(),
            )
        );
    }

    public function showAction()
    {
        $this->render('user/show');
    }
}
