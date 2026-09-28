@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')

<div class="text-center py-4">
    <h1 class="fw-bold">Profil Mahasiswa</h1>
    <p class="text-muted">
        Detail mahasiswa berdasarkan NRP
    </p>
</div>

<div class="row g-3">

    <div class="col-md-6">
        <x-info-card
            label="Nama"
            value="{{ $nama }}"
        />
    </div>

    <div class="col-md-6">
        <x-info-card
            label="NRP"
            value="{{ $nrp }}"
        />
    </div>

    <div class="col-md-6">
        <x-info-card
            label="Departemen"
            value="{{ $departemen }}"
        />
    </div>

    <div class="col-md-6">
        <x-info-card
            label="Universitas"
            value="{{ $universitas }}"
        />
    </div>

    <div class="col-md-6">
        <x-info-card
            label="Status"
            value="{{ $status }}"
        />
    </div>

    <div class="col-md-6">
        <x-info-card
            label="Minat Akademik"
            value="{{ $minat }}"
        />
    </div>

</div>

@endsection