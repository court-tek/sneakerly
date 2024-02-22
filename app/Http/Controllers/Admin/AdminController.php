<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin/dashboard');
    }

    public function create() {
        // return view('admin/create');
    }

    public function store(Request $request) 
    {
        
    }

    public function all() {
        // return view('admin/all');
    }

    public function show() {
        
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
