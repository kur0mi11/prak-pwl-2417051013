@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-md-5">

                    <div class="mb-4">
                        <h2 class="fw-bold mb-1">
                            Edit Pengguna
                        </h2>
                        <p class="text-secondary mb-0">
                            Perbarui data pengguna melalui form berikut.
                        </p>
                    </div>

                    <form action="{{ route('user.update', $user->id) }}"
                          method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama" class="form-label">
                                Nama
                            </label>
                            <input type="text"
                                   class="form-control"
                                   id="nama"
                                   name="nama"
                                   value="{{ old('nama', $user->nama) }}"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label">
                                NPM
                            </label>
                            <input type="text"
                                   class="form-control"
                                   id="npm"
                                   name="npm"
                                   value="{{ old('npm', $user->npm) }}"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label for="kelas_id" class="form-label">
                                Kelas
                            </label>
                            <select class="form-select"
                                    name="kelas_id"
                                    id="kelas_id"
                                    required>

                                @foreach ($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}"
                                        @selected(old('kelas_id', $user->kelas_id) == $kelasItem->id)>
                                        {{ $kelasItem->nama_kelas }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ url('/user') }}"
                               class="btn btn-outline-secondary">
                                Kembali
                            </a>

                            <button type="submit" class="btn btn-dark">
                                Simpan Perubahan
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection