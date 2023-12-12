@extends('layouts.page')

@section('title')
    delete
@endsection

@section('content')
    <div>
        <p>本当に会員情報を削除しますか。</p>
        <br>
        <table>
            <tr>
                <th>name</th>
                <td class="text-center">:</td>
                <td>{{ $items->name }}</td>
            </tr>
            <tr>
                <th>tel</th>
                <td class="text-center">:</td>
                <td>{{ $items->tel }}</td>
            </tr>
            <tr>
                <th>mail</th>
                <td class="text-center">:</td>
                <td>{{ $items->email }}</td>
            </tr>
        </table>
        <br>
        <div class="d-flex justify-content-center">
            <form action="/acountdelete" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $items->id }}">
                <input type="submit" value="Delete">
            </form>
        </div>
    </div>
@endsection
