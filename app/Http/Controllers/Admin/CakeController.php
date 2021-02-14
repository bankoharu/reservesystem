<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CakeController extends Controller
{
    //
  public function add()
    {
        return view('admin.cake.create');
    }

    public function create()
    {
        return redirect('admin/cake/create');
    }

    public function edit()
    {
        return view('admin.cake.edit');
    }

    public function update()
    {
        return redirect('admin/cake/edit');
    }   
}
