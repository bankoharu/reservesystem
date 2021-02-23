@extends('layouts.admin')

@section('title','ケーキの予約')

@section('content')
 <div class=container>
     <div class="row">
         <div class="col-md-8 mx-auto">
             <h2>ケーキの予約</h2>
             <form action="{{ action('Admin\ReserveController@create') }}" method="post" enctype="multipart/form-data">
               @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">スタッフ番号</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="stuffid" value="{{ old('stuffid') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ケーキID</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="cakeid" value="{{ old('cakeid') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">受取日</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="date" value="{{ old('date') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">受け取り時間</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="time" value="{{ old('time') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">お客様名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ご連絡先</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="tel" value="{{ old('tel') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">メッセージプレート</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="message" rows="5">{{ old('message') }}</textarea>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">ろうそく</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="candle" value="{{ old('candle') }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">備考欄</label>
                        <div class="col-md-10">
                             <textarea class="form-control" name="note" rows="5">{{ old('note') }}</textarea>
                        </div>
                    </div>
                    
                    <div>
                     <label class="col-md-2">支払い状況</label>
                    <input type="radio" name="payment" value="1">支払い済み
                    <input type="radio" name="payment" value="0">未払い
                    <br>
                    </div>
   


                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="予約">
                </form>
         </div>
     </div>
     
 </div>

@endsection