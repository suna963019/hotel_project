@extends('layouts.page')

@section('title')
    delete
@endsection

@section('content')
<p>本当に会員情報を削除しますか。</p>
<form action="/acountdelete" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$items->id}}">
    <input type="submit" value="Delete">
</form>
<table>
    <tr>
        <th>name</th>
        <td>{{$items->name}}</td>
    </tr>
    <tr>
        <th>tel</th>
        <td>{{$items->tel}}</td>
    </tr>
    <tr>
        <th>mail</th>
        <td>{{$items->email}}</td>
    </tr>
</table>
@endsection