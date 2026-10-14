@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex flex-column flex-md-row
                justify-content-between align-items-md-center
                gap-3 mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                Daftar User
            </h2>

            <p class="text-secondary mb-0">
                Data user yang sudah tersimpan dalam sistem.
            </p>
        </div>

        <a href="{{ route('user.create') }}"
           class="btn btn-dark">

            + Tambah Pengguna

        </a>

    </div>

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show"
         role="alert">

        {{ session('success') }}

        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close">
        </button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="card border-0 shadow-sm">

        <div class="card-body p-0">

            @include('components.user-table', [
                'users' => $users
            ])

        </div>

    </div>

</div>

@endsection