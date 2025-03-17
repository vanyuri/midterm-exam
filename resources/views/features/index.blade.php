@extends('layouts.app')

@section('title', '')

@section('content')
    <div class="container mt-5">
        
        <div class="table-responsive">
            <table class="table table-bordered shadow-sm">
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Feature Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($features as $feature)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="fw-semibold">{{ $feature->name }}</td>
                            <td>{{ $feature->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <p class="text-center text-muted mt-3">&copy; {{ date('Y') }} Web Development Technologies - Midterm Exam</p>
    </div>
@endsection
