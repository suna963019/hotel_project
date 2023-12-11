<html>

<head>
    <title>予約フォーム</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 50pt;
            text-align: right;
            color: #f6f6f6;
            margin: -20px 0px -30px 0px;
            letter-spacing: -4pt;
        }
    </style>
</head>

<body>
    <h1>予約フォーム</h1>
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
                <th>コースID(ハンバーグコースは１，エビフライコースは２を入力):</th>
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


@section('footer')
    copyright 2023 fumiya.
@endsection


</html>
