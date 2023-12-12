@extends('layouts.page')

@section('title', 'reserve.del')

@section('content')
    <div>
        <p>予約を本当に取り消しますか。</p>
        <br>
        <form action="/reserve/del" method="post">
            @csrf
            <table>
                <input type="hidden" name="id" value="{{ $form->id }}">
                <tr>
                    <th>コース</th>
                    <td class="text-center">:</td>
                    <td>{{ $form->course_id }}</td>
                </tr>
                <tr>
                    <th>予約人数</th>
                    <td class="text-center">:</td>
                    <td>{{ $form->number }}</td>
                </tr>
                <tr>
                    <th>予約日数</th>
                    <td class="text-center">:</td>
                    <td>{{ $form->datetime }}</td>
                </tr>

            </table>
            <div class="acount-submit">
                <input type="submit" value="取り消し">
            </div>
        </form>
    </div>
@endsection
