<?php

namespace App\Controllers;
use App\Models\MemberModel;
use App\Controllers\BaseController;

class Members extends BaseController
{
    public function index()
    {
        $model = new MemberModel();
        $data['members'] = $model->findAll();

        return view('members/index', $data);
    }

    public function create()
    {
        return view('members/create');
    }

    public function store()
    {
        $model = new MemberModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'full_name' => $this->request->getPost('full_name'),
            'address' => $this->request->getPost('address'),
            'contact_number' => $this->request->getPost('contact_number'),
            'date_of_birth' => $this->request->getPost('date_of_birth'),
            'gender' => $this->request->getPost('gender'),
            'occupation' => $this->request->getPost('occupation'),
            'membership_type' => $this->request->getPost('membership_type'),
            'date_joined' => date('Y-m-d'), // Set the current date
        ];

        $model->insert($data);

        return redirect()->to('/Success');
    }
    public function edit($id)
    {
        $model = new MemberModel();
        $data['member'] = $model->find($id);

        return view('members/edit', $data);
    }

    public function update($id)
    {
        $model = new MemberModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'full_name' => $this->request->getPost('full_name'),
            'address' => $this->request->getPost('address'),
            'contact_number' => $this->request->getPost('contact_number'),
            'date_of_birth' => $this->request->getPost('date_of_birth'),
            'gender' => $this->request->getPost('gender'),
            'occupation' => $this->request->getPost('occupation'),
            'membership_type' => $this->request->getPost('membership_type'),
            // Remove 'date_joined' as it should not be updated in the edit form
        ];

        $model->update($id, $data);

        return redirect()->to('/members');
    }

    // Add methods for editing and deleting members as needed
}

