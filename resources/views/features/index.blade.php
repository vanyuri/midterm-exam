@extends('layouts.app')

@section('title', 'Features')

@section('content')
    <h1>Feature List</h1>
    @if($features->isEmpty())
        <p>No features available.</p>
    @else
        <ul>
            @foreach($features as $feature)
                <li>
                    <strong>{{ $feature->name }}</strong> <br>
                    <p>{{ $feature->description }}</p> {{-- Make sure you have this line --}}
                </li>
            @endforeach
        </ul>
    @endif
@endsection
