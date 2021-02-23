<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cake;
class CakeController extends Controller
{
    //
  public function add()
    {
        return view('admin.cake.create');
    }

    public function create(Request $request)
    {
        
    $this->validate($request, Cake::$rules);
    
      $cake= new Cake;
      $form = $request->all();
      
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $cake->image_path = basename($path);
      } else {
          $cake->image_path = null;
      }
      
    unset($form['_token']);
    unset($form['image']);
    
    $cake->fill($form);
    $cake->save();
    
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
    
    public function index(Request $request){
        $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Cake::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Cake::all();
      }
      return view('admin.cake.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
     
}
