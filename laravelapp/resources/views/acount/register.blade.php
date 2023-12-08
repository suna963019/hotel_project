@extends('layouts.page')

@section('title')
    index
@endsection

@section('content')
    <form action="/register" method="POST">
        @csrf
        <table>
            <tr>
                <th>お名前</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td><input type="tel" name="tel"></td>
            </tr>
            <tr>
                <th>メール</th>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <th>パスワード（再度）</th>
                <td><input type="text" name="password_confirmation"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="登録"></td>
            </tr>
        </table>
    </form>
@endsection
