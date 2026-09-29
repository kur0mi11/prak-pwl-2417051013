<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-semibold" href="{{ url('/user') }}">
            User Management
        </a>

        <div class="d-flex gap-2">
            <a href="{{ url('/user') }}"
               class="btn btn-outline-light btn-sm">
                Daftar User
            </a>

            <a href="{{ route('user.create') }}"
               class="btn btn-light btn-sm">
                Tambah User
            </a>
        </div>
    </div>
</nav>