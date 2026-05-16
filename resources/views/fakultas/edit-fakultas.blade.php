<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Card Wrapper disamakan dengan halaman Tambah & Detail -->
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <h5 class="card-title mb-0 fw-bold text-secondary">Edit Fakultas</h5>
                    </div>
                    
                    <div class="card-body p-4">
                        <form action="/fakultas/{{ $fakultas->id }}" method="POST">
                            @csrf
                            @method("PUT")
                            
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                             @endif

                            <!-- Input Nama Fakultas -->
                            <div class="mb-3">
                                <label for="nama_fakultas" class="form-label fw-medium text-muted">Nama Fakultas</label>
                                <input type="text" 
                                       name="nama_fakultas" 
                                       id="nama_fakultas" 
                                       class="form-control" 
                                       placeholder="Nama Fakultas"
                                       value="{{ old('nama_fakultas', $fakultas->nama_fakultas) }}" 
                                       >
                            </div>
                            
                            <!-- Input Nama Dekan -->
                            <div class="mb-4">
                                <label for="nama_dekan" class="form-label fw-medium text-muted">Nama Dekan</label>
                                <input type="text" 
                                       name="nama_dekan" 
                                       id="nama_dekan" 
                                       class="form-control" 
                                       placeholder="Nama Dekan"
                                       value="{{ old('nama_dekan', $fakultas->nama_dekan) }}" 
                                       >
                            </div>
                            
                            <!-- Tombol Aksi Kanan Bawah -->
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="/fakultas" class="btn btn-light border">Batal</a>
                                <button type="submit" class="btn btn-warning px-4 text-white">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>