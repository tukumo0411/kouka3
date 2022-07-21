@extends('layouts.kouka')

@section('title', 'kouka')

@section('menu_title')
メモ削除
@endsection

@section('content')
   <form action="/kouka3/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>data: </th><td>{{$item->data}}</td></tr>
      <tr><th>memo: </th><td>{{$item->memo}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
@endsection
