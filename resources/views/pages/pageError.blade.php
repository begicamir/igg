@extends('layouts.layout')

@php
     $title='Error Page';
     $subTitle='Error Page';
@endphp

@section('content')

    <!-- Error Page -->
    <div class="error-page">
        <div class="auto-container">
            <div class="content">
                <h1>404</h1>
                <h2>Oops! That page can’t be found</h2>
                <div class="text">Sorry, but the page you are looking for does not existing</div>
                <a href="{{ route('index') }}" class="theme-btn btn-style-one"><span> Go to home page</span></a>
            </div>
        </div>
    </div>

@endsection