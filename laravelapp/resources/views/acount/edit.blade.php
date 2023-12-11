@extends('layouts.page')

@section('title')
    edit
@endsection

@section('content')
    <form action="/acountedit" method="POST">
        @csrf
        <table>
            <tr>
                <th>お名前</th>
                <td><input type="text" name="name" value="{{$items->name}}"></td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td><input type="tel" name="tel" value="{{$items->tel}}"></td>
            </tr>
            <tr>
                <th>メール</th>
                <td><input type="email" name="email" value="{{$items->email}}"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="変更"></td>
            </tr>
        </table>
    </form>
@endsection
