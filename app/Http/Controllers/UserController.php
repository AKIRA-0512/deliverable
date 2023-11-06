<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
    public function index(user $user)//インポートしたuserをインスタンス化して$userとして使用。
        {
            return view('posts.index')->with(['users' => $user->getByLimit()]);  
        }
}
