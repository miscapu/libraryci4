<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        helper( [ 'Form' ] );

        $data   =   [
            'title' =>  'Login'
        ];

        $renderT    =   \Config\Services::renderer();
        return $renderT->setData( $data )->render( 'Pages/Login' );
    }

    public function register()
    {
        helper( [ 'Form' ] );

        $data   =   [
            'title' =>  'Register'
        ];

        if ( $this->request->getMethod() == 'post' ){
            //validation
            $rules      =   [
                'firstnameFrm'  =>  'required|min_length[3]|max_length[50]',
                'lastnameFrm'   =>  'required|min_length[3]|max_length[80]',
                'emailFrm'      =>  'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'pwdFrm'        =>  'required|min_length[4]|max_length[255]',
                'cfpwdFrm'      =>  'matches[pwdFrm]',
            ];

            $messages   =   [
                'firstnameFrm'  =>  [
                    'required'      =>  'Please, enter first name',
                    'min_length'    =>  'Please, enter more than 3 characters',
                    'max_length'    =>  'Please, enter less than 50 characters',
                ],

                'lastnameFrm'  =>  [
                    'required'      =>  'Please, enter last name',
                    'min_length'    =>  'Please, enter more than 3 characters',
                    'max_length'    =>  'Please, enter less than 80 characters',
                ],

                'emailFrm'      =>  [
                    'required'      =>  'Please, enter email',
                    'min_length'    =>  'Please, enter more than 3 characters',
                    'max_length'    =>  'Please, enter less than 50 characters',
                    'valid_email'   =>  'Please, enter valid email',
                    'is_unique'     =>  'Please, email already exists',
                ],

                'pwdFrm'  =>  [
                    'required'      =>  'Please, enter firstname',
                    'min_length'    =>  'Please, enter more than 4 characters',
                    'max_length'    =>  'Please, enter less than 255 characters',
                ],

                'cfpwdFrm'  =>  [
                    'matches'      =>  'Please, enter password matches!',
                ],
            ];

            if ( ! $this->validate( $rules, $messages ) ){
                $data[ 'validation' ]   =   $this->validator;
            }else{
                $userModel  =   new UserModel();

                $newData    =   [
                    'firstname'     =>  $this->request->getVar( 'firstnameFrm' ),
                    'lastname'      =>  $this->request->getVar( 'lastnameFrm' ),
                    'email'         =>  $this->request->getVar( 'emailFrm' ),
                    'password'      =>  $this->request->getVar( 'pwdFrm' ),
                ];

                $userModel->save( $newData );
                $session    =   session();
                $session->setFlashdata( 'success', 'Successful Registration' );

                return redirect()->to( '/' );
            }
        }




        $renderT    =   \Config\Services::renderer();
        return $renderT->setData( $data )->render( 'Pages/Register' );
    }


}
