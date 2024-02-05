<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function register()
    {
        $data = [];

        if ($this->request->getMethod() === 'post') {
            $userModel = new UserModel();

            $rules = [
                'username' => 'required|min_length[3]|max_length[30]|is_unique[users.username]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]',
                'password_confirm' => 'matches[password]',
                'role' => 'required|in_list[user,admin]' // Ensure the role is either user or admin
            ];

            if ($this->validate($rules)) {
                $userModel->save([
                    'username' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                    'role' => $this->request->getPost('role') // Save the selected role to the database
                ]);

                return redirect()->to('/register');
            } else {
                $data['validation'] = $this->validator;
            }
            
        }

        return view('register', $data);
    }

    // Other methods...

    public function login()
{
    $data = [];

    if ($this->request->getMethod() === 'post') {
        $userModel = new UserModel();

        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];

        if ($this->validate($rules)) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $userModel->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                // Check user role
                if ($user['role'] === 'admin') {
                    // Admin login logic
                    // Redirect to the admin dashboard or perform other admin-specific actions
                    return redirect()->to('/admin');
                } else {
                    // Regular user login logic
                    // Redirect to the user dashboard or perform other user-specific actions
                    return redirect()->to('/Landing');
                }
            } else {
                $data['error'] = 'Invalid login credentials';
            }
        } else {
            $data['validation'] = $this->validator;
        }
    }

    return view('login', $data);
}



}

