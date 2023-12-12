@extends('layouts.page')

@section('title')
    edit
@endsection

@section('content')
    <form action="/acountedit" method="POST">
        @csrf
        <table>
            <tr>
                <th>name</th>
                <td class="text-center">:</td>
                <td><input type="text" name="name" value="{{$items->name}}"></td>
            </tr>
            <tr>
                <th>tel</th>
                <td class="text-center">:</td>
                <td><input type="tel" name="tel" value="{{$items->tel}}"></td>
            </tr>
            <tr>
                <th>e-mail</th>
                <td class="text-center">:</td>
                <td><input type="email" name="email" value="{{$items->email}}"></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td><br></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Change"></td>
            </tr>
        </table>
    </form>
@endsection
