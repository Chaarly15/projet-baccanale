@extends('layouts.app')

@section('hero')
    <header class="hero-section" style="background-image: url('{{ asset('assets/images/hero-background.jpg') }}');">
        <div class="container text-center">
            <div class="hero-text-box">
                <h1 class="display-4 fw-bold">{{ strtoupper($page->title) }}</h1>
                <p class="lead mt-3">{{ $page->meta_description ?? 'Découvrez plus d\'informations sur nos services' }}</p>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            {!! $page->body !!}
        </div>
    </section>
@endsection
