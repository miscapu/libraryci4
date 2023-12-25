<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $userModel  =  new UserModel();
        $users      =   $userModel->asObject()->findAll();

        $data   =   [
            'title' =>  'Dashboard',
            'users' =>  $users
        ];



        $renderT    =   \Config\Services::renderer();
        return $renderT->setData( $data )->render( 'Pages/Dashboard' );
    }
}
