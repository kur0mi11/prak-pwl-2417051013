<div class="table-responsive">

    <table class="table table-hover align-middle mb-0">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>

                    <td class="fw-semibold">
                        {{ $user->nama }}
                    </td>

                    <td>{{ $user->npm }}</td>

                    <td>
                        <span class="badge text-bg-secondary">
                            {{ $user->nama_kelas }}
                        </span>
                    </td>

                    <td>
                        <div class="d-flex gap-2">

                            <a href="{{ route('user.edit', $user->id) }}"
                               class="btn btn-sm btn-outline-primary">
                                Edit
                            </a>

                            <form action="{{ route('user.destroy', $user->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-sm btn-outline-danger">
                                    Hapus
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="5"
                        class="text-center text-secondary py-4">
                        Belum ada data pengguna.
                    </td>
                </tr>
            @endforelse
        </tbody>

    </table>

</div>