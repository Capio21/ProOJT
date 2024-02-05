<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function Landing(): string
    {
        return view('Landing');
    }
    public function admin(): string
    {
    $userModel = new \App\Models\UserModel(); // Adjust the namespace as needed
    $data['users'] = $userModel->findAll();

    return view('admin', $data);
    }
    public function Website(): string
    {
        return view('Website');
    }
    public function Success(): string
    {
        return view('Success');
    }
}
