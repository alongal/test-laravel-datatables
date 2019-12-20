<?php

namespace App\Http\Controllers;

use App\User;
use Yajra\DataTables\DataTables;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(20);

        return view('index', [
            'users' => $users
        ]);
    }

    public function usersData()
    {
        return DataTables::of(User::query())->make(true);
    }
}
