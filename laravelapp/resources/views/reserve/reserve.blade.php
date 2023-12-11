@section('content')
    <p>{{ $msg }}</p>
    <form action="/reserve" method="post">
        <table>
            @csrf
            <tr>
                <th>user_id: </th>
                <td><input type="text" name="user_id"></td>
            </tr>
            <tr>
                <th>course_id: </th>
                <td><input type="text" name="course_id"></td>
            </tr>
            <tr>
                <th>number: </th>
                <td><input type="text" name="number"></td>
            </tr>
            <tr>
                <th>datetime: </th>
                <td><input type="text" name="datetime"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </table>
    </form>
@endsection
