<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reserve;

class ReserveController extends Controller
{
    //
    public function add(){
        return view('admin.reserve.create');
    }
    
    public function create(Request $request){
     $this->validate($request, Reserve::$rules);
      $reserve = new Reserve;
      $form = $request->all();
      
      unset($form['_token']);
      
      $reserve->fill($form);
      $reserve->save();
      
      return redirect('admin/reserve/create');
    }
    
    public function edit(){
      return view('admin.reserve.edit');   
    }
    
    public function update(){
        return redirect('admin/reserve/edit');
    }
    public function delete(){
       
    }
    
   
}
