@extends('layouts.cake')

@section('title','ケーキの登録')

@section('content')
 <div class=container>
     <div class="row">
         <div class="col-md-8 mx-auto">
             <h2>ケーキの登録</h2>
              <form action="{{ action('Admin\CakeController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">ケーキ名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="cakename" value="{{ old('cakename') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">価格</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">アレルギー情報</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="info" value="{{ old('info') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
         </div>
     </div>
     
 </div>

@endsection