<div class="table-responsive">

    <table class="table table-hover align-middle mb-0">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($users as $user)

                <tr>
                    <td>{{ $user->id }}</td>

                    <td class="fw-semibold">
                        {{ $user->nama }}
                    </td>

                    <td>
                        {{ $user->npm }}
                    </td>

                    <td>
                        <span class="badge text-bg-secondary">
                            {{ $user->nama_kelas }}
                        </span>
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="4"
                        class="text-center text-secondary py-4">

                        Belum ada data pengguna.

                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

</div>