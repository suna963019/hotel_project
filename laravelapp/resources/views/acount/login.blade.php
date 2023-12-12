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
            <tr>
                <th></th>
                <td></td>
                <td><br></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
@endsection
