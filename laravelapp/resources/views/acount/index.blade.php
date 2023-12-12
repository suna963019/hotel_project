@extends('layouts.page')

@section('title')
    index
@endsection

@section('content')
<table>
    <tr>
        <th>name</th>
        <td class="text-center">:</td>
        <td>{{$items->name}}</td>
    </tr>
    <tr>
        <th>tel</th>
        <td class="text-center">:</td>
        <td>{{$items->tel}}</td>
    </tr>
    <tr>
        <th>e-mail</th>
        <td class="text-center">:</td>
        <td>{{$items->email}}</td>
    </tr>
</table>
@endsection