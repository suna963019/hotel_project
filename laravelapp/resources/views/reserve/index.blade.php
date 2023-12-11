@extends('layouts.page')

@section('title', 'reserve.index')

@section('content')

    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </head>
    <div class="row align-items-start">
        <div class="row align-items-start">
            <tr class="col">
                <th>コース名</th>
                <th>人数</th>
                <th>予約日時</th>
            </tr>
        </div>
    </div>
    <div class="container text-center">
        <div class="row align-items-center">
            @foreach ($items as $item)
                <tr class="col">
                    <td>{{ $item->course->name }}</td>
                    <td>{{ $item->number }}</td>
                    <td>{{ $item->datetime }}</td>
                </tr>
            @endforeach
        </div>
    </div>

@endsection
