<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function index()
    {
        
    }

    public function register()
    {
        $rules = [
            'FirstName' => 'required|min_length[2]',
            'LastName' => 'required|min_length[2]',
            'gender' => 'required',
            'ContactNo' => 'required|regex_match[/^[0-9]{11}$/]',
            'UserName' => 'required|min_length[2]',
            'Address' => 'required|min_length[5]',
            'email' => 'required|min_length[4]|valid_email|is_unique[user.email]',
            'Password' => 'required|alpha_numeric_punct|min_length[8]',
            'ConfirmPassword' => 'required|matches[Password]'
        ];

        if($this->validate($rules))
        {
            $data = [
                'FirstName' => $this->request->getPost('FirstName'),
            ];
        }
    }

    public function login()
    {
        $session = session();

    }
}
