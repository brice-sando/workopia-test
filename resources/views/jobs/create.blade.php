@extends('layout')

@section('title')
    Available Job Listings
@endsection

@section('content')
    <h1>Create new Job</h1>
    <form action="/jobs" method="post">
        @csrf
        <input type="text" name="title" id="title" placeholder="title">
        <input type="text" name="description" id="description" placeholder="description">
        <button type="submit">Submit</button>
    </form>
@endsection
