@extends('layouts.kouka')

@section('title', 'kouka')

@section('menu_title')
メモ帳
@endsection

@section('content')

@if (Auth::check())
<p>ユーザー: {{$user->name . ' (' . $user->email . ')'}}</p>
<a href="/register">ログアウト画面へ<br></a>
@else
<p>ログインしていません。（<a href="/login">ログイン</a>|
   <a href="/register">登録</a>）</p>
@endif

    </form>
   <a href="/kouka3/add">新規作成</a>
   <table>
   <tr><th>日付</th><th>メモ</th><th>詳細</th><th>更新</th><th>削除</th>
    <!--テーブルの表示-->
   @foreach ($items as $item)
       <tr>
           <td>{{$item->data}}</td>
           <td>{{$item->memo}}</td>
           <td><a href="/kouka3/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/kouka3/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/kouka3/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
   <div class="d-flex justify-content-center">{{ $items->links() }}
@endsection
