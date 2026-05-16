<x-layout>
    <div class="container my-4">
        <!-- Card Wrapper untuk tampilan yang lebih modern -->
        <div class="card shadow-sm border-0">
            
            <!-- Header Tabel -->
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center border-bottom">
                <h1 class="h4 mb-0 fw-bold text-secondary">List Fakultas</h1>
                <!-- Anda bisa menambahkan tombol "Tambah Fakultas" di sini nanti jika diperlukan -->
            </div>

            <!-- Responsive Wrapper agar tabel tidak rusak di HP -->
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle mb-0">
                    <thead class="table-light text-uppercase fs-7 text-muted">
                        <tr>
                            <th scope="col" class="ps-4" style="width: 8%">No</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Dekan</th>
                            <th scope="col" class="text-end pe-4" style="width: 30%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fakultas as $item)
                            <tr>
                                <td class="ps-4 fw-medium text-secondary">{{ $loop->iteration }}</td>
                                <td class="fw-semibold text-dark">{{ $item->nama_fakultas }}</td>
                                <td>{{ $item->nama_dekan }}</td>
                                <td class="text-end pe-4">
                                    <!-- Grouping Tombol Aksi agar tetap sejajar kesamping -->
                                    <div class="d-inline-flex gap-1">
                                        <a href="/fakultas/{{ $item->id }}" class="btn btn-sm btn-outline-info">Detail</a>
                                        <a href="/fakultas/{{ $item->id }}/edit" class="btn btn-sm btn-outline-warning">Edit</a>
                                        <a href="/fakultas/{{ $item->id }}" class="btn btn-sm btn-outline-secondary">Matikan</a>
                                        
                                        <!-- Form Hapus dibuat inline -->
                                        <form action="/fakultas/{{ $item->id }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus fakultas ini?')">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</x-layout>