@extends('layouts.page')

@section('title', 'reserve.index')

@section('content')
        <table class="table reserve-table">
            <tr>
                <th>コース名</th>
                <th>人数</th>
                <th>予約日時</th>
                <th></th>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->course->name }}</td>
                    <td>{{ $item->number }}</td>
                    <td>{{ $item->datetime }}</td>
                    <td><form action="/reserve/del" method="GET">@csrf<input type="hidden" name="id" value="{{$item->id}}"><input type="submit" value="取り消し"></form></td>
                </tr>
            @endforeach
        </table>

@endsection
