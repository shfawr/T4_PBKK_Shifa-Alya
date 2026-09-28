@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="text-center">

    <h1 class="display-4 fw-bold">
        Selamat Datang 👋
    </h1>

    <p class="lead mt-3">
        Selamat datang di ITS Academic Profile
    </p>

    {{-- STATUS BANNER DINAMIS --}}
    @if ($user)
        <x-status-banner type="success">
            Selamat datang, {{ $user }}!
        </x-status-banner>
    @else
        <x-status-banner type="info">
            Selamat datang di academic profile saya.
        </x-status-banner>
    @endif

    {{-- PROFIL MAHASISWA --}}
    <div class="card shadow-sm mt-4 mx-auto" style="max-width: 500px;">
        <div class="card-body">

            <h4 class="card-title">
                Profil Mahasiswa
            </h4>

            <p class="mb-2">
                <strong>Nama:</strong> Shifa Alya Dewi
            </p>

            <p class="mb-0">
                <strong>NRP:</strong> 5025241176
            </p>

        </div>
    </div>

</div>

@endsection