<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('parson', 'appoiment')->paginate(10);

        return view('user.index', compact('users'));
    }
}
