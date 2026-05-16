<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Card Wrapper disamakan dengan form tambah -->
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <h5 class="card-title mb-0 fw-bold text-secondary">Detail Fakultas</h5>
                    </div>
                    
                    <div class="card-body p-4">
                        <!-- Tabel Detail yang dirapikan dengan Bootstrap 5 -->
                        <table class="table table-borderless align-middle mb-4">
                            <tbody>
                                <tr class="border-bottom">
                                    <td class="fw-medium text-muted py-3" style="width: 35%">Nama Fakultas</td>
                                    <td class="text-muted py-3" style="width: 5%">:</td>
                                    <td class="fw-semibold text-dark py-3">{{ $fakultas->Nama_fakultas }}</td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="fw-medium text-muted py-3">Nama Dekan</td>
                                    <td class="text-muted py-3">:</td>
                                    <td class="text-dark py-3">{{ $fakultas->Nama_dekan }}</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <!-- Tombol Aksi di posisi yang sama (Kanan Bawah) -->
                        <div class="d-flex justify-content-end">
                            <a href="/fakultas" class="btn btn-light border px-4">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>