@extends('layouts.app')

@section('title', 'Movie List')

@section('content')
    <h1 style="color: red;">Movie List</h1>
    <table border="1">
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Synopsis</th>
            <th>Rating</th>
            <th>Action</th>
        </tr>
        @forelse ($movies as $movie)
            <tr>
                <td><img src="{{ $movie['image'] }}" alt="" srcset="" style="height: 60px; width: 100px;"></td>
                <td>{{ $movie['title'] }}</td>
                <td>{{ $movie['synopsis'] }}</td>
                <td>{{ $movie['rating'] }}</td>
                <td>
                    <a href="{{ route('movie.show', $movie['id']) }}">Show</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" align="center">Tidak ada data</td>
            </tr>
        @endforelse
    </table>
@endsection