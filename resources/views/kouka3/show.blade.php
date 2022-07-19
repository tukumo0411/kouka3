@extends('layouts.kouka')

@section('title', 'kouka')

@section('menu_title')
ユーザ情報詳細画面

@endsection
@section('content')
   <table>
   <tr><th>Name</th><th>Mail</th></tr><th>password</th>
       <tr>
           <td>{{$item->getData()}}</td>
           <td>{{$item->mail}}</td>
           <td>{{$item->password}}</td>
       </tr>
   </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
