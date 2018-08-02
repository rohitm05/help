<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class User extends Controller
{
    //
    public function index()
    {
        $users = DB::table('categories')->paginate(5);

        return view('category.index', ['id' => $users]);
    }
}
