@extends('layouts.page')

@section('title')
    index
@endsection

@section('content')
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