<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }
    public function create()
    {
        retuen redirect('admin/profile/create');   
    }
    public function edit()
    {
        retuen view('admin.profile.edit');
    }
    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
