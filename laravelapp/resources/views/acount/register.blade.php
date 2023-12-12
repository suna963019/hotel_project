@extends('layouts.page')

@section('title')
    register
@endsection

@section('content')
    <form action="/register" method="POST">
        @csrf
        <table>
            <tr>
                <th>name</th>
                <td class="text-center">:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>tel</th>
                <td class="text-center">:</td>
                <td><input type="tel" name="tel"></td>
            </tr>
            <tr>
                <th>e-mail</th>
                <td class="text-center">:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <th>password</th>
                <td class="text-center">:</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <th>password（check）</th>
                <td class="text-center">:</td>
                <td><input type="text" name="password_confirmation"></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td><br></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
    </form>
@endsection
