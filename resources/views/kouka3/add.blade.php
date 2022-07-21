@extends('layouts.kouka')

@section('title', 'kouka')

@section('menu_title')
新規メモの作成
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
      <tr><th>日付: </th><td><input type="text" name="data" value="{{old('data')}}"></td></tr>
    <tr><th>メモ: </th><td><input type="text" name="memo" value="{{old('memo')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="新規作成"></td></tr>
   </table>
   </form>
@endsection
