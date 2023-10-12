@extends('layouts.app')

@section('title', $movie['title'])

@section('content')
    <h1 style="color: red;">Detail Movie</h1>
    <table border="0">
        <tr>
            <th>Title</th>
            <td>{{ $movie['title'] }}</td>
        </tr>
        <tr>
            <th>Synopsis</th>
            <td>{{ $movie['synopsis'] }}</td>
        </tr>
    </table>
@endsection