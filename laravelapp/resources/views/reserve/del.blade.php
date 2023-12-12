@extends('layouts.page')

@section('title', 'reserve.del')

@section('content')
@if ($check)
    <p>予約がありません。</p>
@endif
        <table>
            @foreach ($forms as $form)
                
            <form action="/reserve/del" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr><th>コース</th><td>{{$form->course_id}}</td></tr>
            <tr><th>予約人数</th><td>{{$form->number}}</td></tr>
            <tr><th>予約日数</th><td>{{$form->datetime}}</td></tr>
            <tr><th></th><td><input type="submit" value="delete"></td></tr>
        </form>
        @endforeach
        </table>
@endsection

