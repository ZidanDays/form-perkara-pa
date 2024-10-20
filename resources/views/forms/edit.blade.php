@extends('layouts.main')
@section('container')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5>Edit Perkara</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('perkara.update', $perkara->id) }}" method="POST">
                            @csrf
                            @method('PUT') <!-- Menyatakan bahwa form ini menggunakan method PUT untuk update -->
                        
                            <!-- Input Tanggal -->
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" name="tanggal" id="tanggal" value="{{ $perkara->tanggal }}" class="form-control" required>
                            </div>
                        
                            <!-- Input Nomor Perkara -->
                            <div class="form-group">
                                <label for="nomor_perkara">Nomor Perkara</label>
                                <input type="text" name="nomor_perkara" id="nomor_perkara" value="{{ $perkara->nomor_perkara }}" class="form-control" required>
                            </div>
                        
                            <!-- Input Nomor Akta -->
                            <div class="form-group">
                                <label for="nomor_akta">Nomor Akta</label>
                                <input type="text" name="nomor_akta" id="nomor_akta" value="{{ $perkara->nomor_akta }}" class="form-control" required>
                            </div>
                        
                            <!-- Input Nama -->
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" value="{{ $perkara->nama }}" class="form-control" required>
                            </div>
                        
                            <!-- Input Alamat -->
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" required>{{ $perkara->alamat }}</textarea>
                            </div>
                        
                            <!-- Input Nomor Telepon -->
                            <div class="form-group">
                                <label for="nomor_telepon">Nomor Telepon</label>
                                <input type="text" name="nomor_telepon" id="nomor_telepon" value="{{ $perkara->nomor_telepon }}" class="form-control" required>
                            </div>
                        
                            <!-- Input Pihak -->
                            <div class="form-group">
                                <label for="pihak">Pihak</label>
                                <select name="pihak" id="pihak" class="form-control" required>
                                    <option value="penggugat" {{ $perkara->pihak == 'penggugat' ? 'selected' : '' }}>Penggugat</option>
                                    <option value="pemohon" {{ $perkara->pihak == 'pemohon' ? 'selected' : '' }}>Pemohon</option>
                                    <option value="tergugat" {{ $perkara->pihak == 'tergugat' ? 'selected' : '' }}>Tergugat</option>
                                    <option value="termohon" {{ $perkara->pihak == 'termohon' ? 'selected' : '' }}>Termohon</option>
                                    <option value="lainnya" {{ $perkara->pihak == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                                </select>
                            </div>

                                                        <!-- Input Nama Penggugat -->
                                                        <div class="form-group">
                                                            <label for="nama_penggugat">Nama Penggugat</label>
                                                            <input type="text" name="nama_penggugat" id="nama_penggugat" value="{{ $perkara->nama_penggugat }}" class="form-control" required>
                                                        </div>

                                                                                    <!-- Input Nomor Telepon -->
                            <div class="form-group">
                                <label for="nama_tergugat">Nama Tergugat</label>
                                <input type="text" name="nama_tergugat" id="nama_tergugat" value="{{ $perkara->nama_tergugat }}" class="form-control" required>
                            </div>

                                                        <!-- Input Nomor Telepon -->
                                                        <div class="form-group">
                                                            <label for="nama_ketua_majelis">Nama Ketua Majelis</label>
                                                            <input type="text" name="nama_ketua_majelis" id="nama_ketua_majelis" value="{{ $perkara->nama_ketua_majelis }}" class="form-control" required>
                                                        </div>
                        
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Update Perkara</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
