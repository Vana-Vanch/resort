<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['checkStatus', 'auth']);
    }

    public function index(){
        return view('admin.admin');
    }
}
