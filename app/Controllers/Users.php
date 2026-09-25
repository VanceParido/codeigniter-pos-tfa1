<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Juan Dela Cruz',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'full_name' => 'Maria Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'full_name' => 'Pedro Reyes',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager',
                'full_name' => 'Ana Garcia',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff1',
                'full_name' => 'Carlo Mendoza',
                'role' => 'Staff'
            ]
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $users
        ]);
    }
}