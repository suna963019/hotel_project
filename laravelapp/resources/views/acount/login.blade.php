@extends('layouts.page')

@section('title')
    login
@endsection

@section('content')
    <form action="/login" method="POST">
        @csrf
        <table>
            <tr>
                <th>mail</th>
                <td class="text-center">:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <th>password</th>
                <td class="text-center">:</td>
                <td><input type="text" name="password"></td>
            </tr>
        </table>
        <div class="acount-submit">
            <input type="submit" value="Login">
        </div>
    </form>
@endsection
