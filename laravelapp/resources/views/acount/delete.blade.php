@extends('layouts.page')

@section('title')
    index
@endsection

@section('content')
<p>本当に会員情報を削除しますか。</p>
<form action="/acountdelete" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$items->id}}">
    <input type="submit" value="削除">
</form>
<table>
    <tr>
        <th>お名前</th>
        <td>{{$items->name}}</td>
    </tr>
    <tr>
        <th>電話番号</th>
        <td>{{$items->tel}}</td>
    </tr>
    <tr>
        <th>メール</th>
        <td>{{$items->email}}</td>
    </tr>
</table>
@endsection