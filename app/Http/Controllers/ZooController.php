<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\zoo;

class ZooController extends Controller
{
    public function index(zoo $zoo)//インポートしたuserをインスタンス化して$userとして使用。
        {
            return view('posts.index')->with(['zoos' => $zoo->getPaginateByLimit()]);  
        }
}
