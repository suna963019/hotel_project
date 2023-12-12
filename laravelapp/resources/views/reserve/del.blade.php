<html>
<head>
    <title>予約フォーム</title>
    <style>
        body{font-size: 16pt; color: #999;}
        h1{font-size: 50pt; text-align: right; color: #f6f6f6;
        margin: -20px 0px -30px 0px; letter-spacing: -4pt;}
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
<form action="/reserve/del" method="post">
    <table>
        @csrf
        <tr>
            <th>user_id:</th>
            <td><input type="text" name="user_id" value="{{ old('user_id') }}"></td>
        </tr>
        <tr>
            <th>course_id:</th>
            <td><input type="text" name="course_id" value="{{ old('course_id') }}"></td>
        </tr>
        <tr>
            <th>number:</th>
            <td><input type="number" name="number" value="{{ old('number') }}"></td>
        </tr>
        <tr>
            <th>datetime:</th>
            <td><input type="date" name="datetime" value="{{ old('datetime') }}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="delete"></td>
        </tr>
    </table>
</form>
</body>


@section('footer')
copyright 2023 fumiya.
@endsection


</html>