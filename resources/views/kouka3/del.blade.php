@extends('layouts.kouka')

@section('title', 'kouka')

@section('menu_title')
メモ削除
@endsection

@section('content')
<!--テーブルの表示-->
   <form action="/kouka3/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>日付: </th><td>{{$item->data}}</td></tr>
      <tr><th>メモ: </th><td>{{$item->memo}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
@endsection
