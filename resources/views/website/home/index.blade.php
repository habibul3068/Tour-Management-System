@extends('website.master')

@section('content')

    <div class="hero-section">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>

        <div class="hero-content">
            <div class="container">
                <p class="sub-title">Discover the Colorful World</p>
                <h1 class="main-title">New Adventure</h1>
                <p class="description">
                    Shobar gulli mari, specially Tourism er!!!!!
                </p>
                <a href="{{ route('auth.register') }}" class="btn btn-discover">Register Now</a>
            </div>
        </div>
    </div>

@endsection