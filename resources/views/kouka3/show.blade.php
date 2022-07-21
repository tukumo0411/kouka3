@extends('layouts.kouka')

@section('title', 'kouka')

@section('menu_title')
メモの詳細

@endsection
@section('content')
   <table>
   <tr><th>data</th><th>memo</th></tr>
       <tr>
           <td>{{$item->getData()}}</td>
           <td>{{$item->memo}}</td>
       </tr>
   </table>
@endsection
