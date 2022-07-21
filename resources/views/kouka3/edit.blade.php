@extends('layouts.kouka')

@section('title', 'kouka')

@section('menu_title')
メモの更新
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
<!--入力枠の表示-->
   <form action="/kouka3/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>日付: </th><td><input type="text" name="data"
         value="{{$item->data}}"></td></tr>
      <tr><th>メモ: </th><td><input type="text" name="memo"
         value="{{$item->memo}}"></td></tr>
      <tr><th></th><td><input type="submit"
         value="更新"></td></tr>
   </table>
   </form>
@endsection
