@extends('layouts.page')

@section('title', 'Reserve.Add')

@section('menubar')
    @parent
    予約ページ
@endsection

@section('content')
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/reserve/add" method="post">
        @csrf
        <table>
            <tr>
                <th>予約フォーム</th>
            </tr>
            <tr>
                <th>コースID:</th>
                <td> <select name="course_id">
                        @foreach ($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <th>予約人数:</th>
                <td><input type="number" name="number" value="{{ old('number') }}"></td>
            </tr>
            <tr>
                <th>予約日程:</th>
                <td><input type="date" name="datetime" value="{{ old('datetime') }}"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </table>
    </form>
    </body>
@endsection


@section('footer')
    copyright 2023 fumiya.
@endsection


</html>
