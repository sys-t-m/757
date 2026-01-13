@extends('layouts.app')

@section('content')
    <div style="text-align: center; padding: 50px;">
        <h1 style="font-size: 4rem; margin-bottom: 20px;">404</h1>
        <p style="font-size: 1.5rem; margin-bottom: 30px;">Oops! The page you are looking for could not be found.</p>
        <a href="{{ route('home') }}" style="text-decoration: underline; color: #333;">Go back to Home</a>
    </div>
@endsection
