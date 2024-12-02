@extends('layout')

@section('title')
    Available Job Listings
@endsection
@section('content')
    <h1>Job List</h1>
    <ul>
        @forelse ($jobs as $job)
            <li> {{ $loop->index + 1 }} {{ $job }}</li>
        @empty
            <li>No data to display</li>
        @endforelse ($jobs as $job)
    </ul>
@endsection
