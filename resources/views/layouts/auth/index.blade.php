@extends('layouts.app')

@section('title')
    @yield('title')
@endsection
@section('content')
    <main style="background-image: url('{{ Vite::asset('resources/image/auth-background.jpg')  }}')" class="min-h-screen bg-cover bg-right flex items-center">
        @yield('main')
    </main>
@endsection
