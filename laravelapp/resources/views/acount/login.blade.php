@extends('layouts.page')

@section('title')
    index
@endsection

@section('content')
    <form action="/login" method="POST">
        @csrf
        <table>
            <tr>
                <th>メール</th>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="ログイン"></td>
            </tr>
        </table>
    </form>
@endsection
