@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div id="particles-js" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;"></div>

<div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100vh;">
    <h1 class="text-white animate-fade-in delay-1">HIZKIA PRATAMA</h1>
    <p class="lead about-text text-light animate-slide-up delay-2">Backend Developer | Fullstack Developer | Software Engineer</p>
    <a href="{{ route('projects') }}" class="btn btn-primary btn-lg mb-3 animate-slide-up delay-3">Explore Projects</a>

    <div class="d-flex gap-3 animate-slide-up delay-3">
        <a href="https://github.com/hizkiia" target="_blank" class="text-white">
            <i class="fab fa-github fa-2x"></i>
        </a>
        <a href="https://www.linkedin.com/in/hizkia-pratama-111862221/" target="_blank" class="text-white">
            <i class="fab fa-linkedin fa-2x"></i>
        </a>
        <a href="https://instagram.com/hizkia__p" target="_blank" class="text-white">
            <i class="fab fa-instagram fa-2x"></i>
        </a>
    </div>
</div>
@endsection