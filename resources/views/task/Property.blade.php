@extends('layouts.master')
@section('title')
    할일 목록
@endsection

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>할일</th>
            <th>기한</th>
        </tr>
        </thead>
        <thead>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task['name'] }}</td>
                {{--<td>{{ $task->name }}</td>--}}
                <td>{{ $task['due_date'] }}</td>
            </tr>
        @endforeach
        </thead>
    </table>
@endsection