@extends('layouts.kouka')

@section('title', 'kouka')

@section('menu_title')
メモの詳細

@endsection
@section('content')
   <table>
    <!--テーブルの表示-->
   <tr><th>日付</th><th>メモ</th></tr>
       <tr>
           <td>{{$item->data}}</td>
           <td>{{$item->memo}}</td>
       </tr>
   </table>
@endsection
