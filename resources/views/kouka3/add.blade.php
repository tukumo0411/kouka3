@extends('layouts.kouka')

@section('title', 'kouka')

@section('menu_title')
ユーザ情報新規登録画面
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="/kouka3/create" method="post">
   <table>
      @csrf
      <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
    <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
    <tr><th>password: </th><td><input type="password" name="input_pass" value="{{old('password')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="新規登録"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
