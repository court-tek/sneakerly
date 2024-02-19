<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin/dashboard');
    }

    public function create() {
        return view('admin/create');
    }

    public function all() {
        return view('admin/all');
    }
}
