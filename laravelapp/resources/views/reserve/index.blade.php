@extends('layouts.page')

@section('title', 'reserve.index')

@section('content')
    <table class="table">
        <tr>
            <th>コース名</th>
            <th>人数</th>
            <th>予約日時</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->course->name }}</td>
                <td>{{ $item->number }}</td>
                <td>{{ $item->datetime }}</td>
            </tr>
        @endforeach
    </table>
@endsection
