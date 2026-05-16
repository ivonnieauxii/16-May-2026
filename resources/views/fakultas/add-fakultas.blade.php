<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Card Wrapper untuk form -->
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <h5 class="card-title mb-0 fw-bold text-secondary">Tambah Fakultas Baru</h5>
                    </div>
                    
                    <div class="card-body p-4">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/fakultas" method="POST">
                            @csrf
                            
                            <!-- Input Nama Fakultas -->
                            <div class="mb-3">
                                <label for="nama_fakultas" class="form-label fw-medium text-muted">Nama Fakultas</label>
                                <input type="text" 
                                       name="nama_fakultas" 
                                       id="nama_fakultas" 
                                       class="form-control" 
                                       placeholder="Masukkan nama fakultas" 
                                       >
                            </div>
                            
                            <!-- Input Nama Dekan -->
                            <div class="mb-4">
                                <label for="nama_dekan" class="form-label fw-medium text-muted">Nama Dekan</label>
                                <input type="text" 
                                       name="nama_dekan" 
                                       id="nama_dekan" 
                                       class="form-control" 
                                       placeholder="Masukkan nama dekan beserta gelar" 
                                       >
                            </div>
                            
                            <!-- Tombol Aksi -->
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="/fakultas" class="btn btn-light border">Batal</a>
                                <button type="submit" class="btn btn-primary px-4">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>