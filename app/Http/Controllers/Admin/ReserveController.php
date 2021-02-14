<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReserveController extends Controller
{
    //
    public function add(){
        return view('admin.reserve.create');
    }
    
    public function create(){
         return redirect('admin/reserve/create');
    }
    
    public function edit(){
      return view('admin.reserve.edit');   
    }
    
    public function update(){
        return redirect('admin/reserve/edit');
    }
}
