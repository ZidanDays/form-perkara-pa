@extends('layouts.main')


@section('container')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Perkara</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Perkara</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        {{-- <div class="row">
            <!-- table card-1 start -->
            <div class="col-md-12 col-xl-4">
                <div class="card flat-card">
                    <div class="row-table">
                        <div class="col-sm-6 card-body br">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-eye text-c-green mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>10k</h5>
                                    <span>Visitors</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-music text-c-red mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>100%</h5>
                                    <span>Volume</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-table">
                        <div class="col-sm-6 card-body br">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-file-text text-c-blue mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>2000 +</h5>
                                    <span>Files</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-mail text-c-yellow mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>120</h5>
                                    <span>Mails</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- widget primary card start -->
                <div class="card flat-card widget-primary-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="feather icon-star-on"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4>4000 +</h4>
                            <h6>Ratings Received</h6>
                        </div>
                    </div>
                </div>
                <!-- widget primary card end -->
            </div>
            <!-- table card-1 end -->
            <!-- table card-2 start -->
            <div class="col-md-12 col-xl-4">
                <div class="card flat-card">
                    <div class="row-table">
                        <div class="col-sm-6 card-body br">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-share-2 text-c-blue mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>1000</h5>
                                    <span>Shares</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-wifi text-c-blue mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>600</h5>
                                    <span>Network</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-table">
                        <div class="col-sm-6 card-body br">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-rotate-ccw text-c-blue mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>3550</h5>
                                    <span>Returns</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-shopping-cart text-c-blue mb-1 d-blockz"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>100%</h5>
                                    <span>Order</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4>17</h4>
                            <h6>Achievements</h6>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
            <!-- table card-2 end -->
            <!-- Widget primary-success card start -->
            <div class="col-md-12 col-xl-4">
                <div class="card support-bar overflow-hidden">
                    <div class="card-body pb-0">
                        <h2 class="m-0">350</h2>
                        <span class="text-c-blue">Support Requests</span>
                        <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                    </div>
                    <div id="support-chart"></div>
                    <div class="card-footer bg-primary text-white">
                        <div class="row text-center">
                            <div class="col">
                                <h4 class="m-0 text-white">10</h4>
                                <span>Open</span>
                            </div>
                            <div class="col">
                                <h4 class="m-0 text-white">5</h4>
                                <span>Running</span>
                            </div>
                            <div class="col">
                                <h4 class="m-0 text-white">3</h4>
                                <span>Solved</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widget primary-success card end -->

            <!-- prject ,team member start -->

            <!-- prject ,team member start -->
            <!-- seo start -->

            <!-- seo end -->

            <!-- Latest Customers start -->

            <!-- Latest Customers end -->
        </div> --}}
        <!-- [ Main Content ] end -->

        <div class="col-md-15">
            <div class="card">
                <div class="card-header">
                    <h5>Daftar Perkara</h5>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>Nomor Perkara</th>
                                    <th>Nomor Akta Cerai</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telepon</th>
                                    <th>Pihak</th>
                                    <th>Nama Penggugat/Pemohon</th>
                                    <th>Nama Tergugat/Termohon</th>
                                    <th>Ketua Majelis</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($perkaras as $perkara)
                                <tr>
                                    <td>{{ $loop->iteration }}</td> <!-- Nomor urut berdasarkan loop -->
                                    <td>{{ $perkara->tanggal }}</td> <!-- Tanggal perkara -->
                                    <td>{{ $perkara->nomor_perkara }}</td> <!-- Nomor perkara -->
                                    <td>{{ $perkara->nomor_akta }}</td> <!-- Nomor perkara -->
                                    <td>{{ $perkara->nama }}</td> <!-- Nama pihak yang mengajukan -->
                                    <td>{{ $perkara->alamat }}</td> <!-- Alamat pihak -->
                                    <td>{{ $perkara->nomor_telepon }}</td> <!-- Nomor telepon pihak -->
                                    <td>{{ $perkara->pihak }}</td> <!-- Pihak terkait perkara -->
                            
                                    <!-- Kolom tambahan untuk nama penggugat, nama tergugat, dan nama ketua majelis -->
                                    <td>{{ $perkara->nama_penggugat ?? '-' }}</td> <!-- Nama penggugat, jika ada -->
                                    <td>{{ $perkara->nama_tergugat ?? '-' }}</td> <!-- Nama tergugat, jika ada -->
                                    <td>{{ $perkara->nama_ketua_majelis ?? '-' }}</td> <!-- Nama ketua majelis, jika ada -->

                                            <!-- Kolom Aksi -->
                                    <td>
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('perkara.edit', $perkara->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                    <!-- Tombol Delete -->
                                    <form action="{{ route('perkara.destroy', $perkara->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                                    </form>

                                        <!-- Tombol Cetak Akta Cerai -->
                                        <a href="{{ route('perkara.cetakAktaCerai', $perkara->id) }}" class="btn btn-sm btn-info">Cetak Akta Cerai</a>

                                        <!-- Tombol Cetak Salinan Putusan -->
                                        <a href="{{ route('perkara.cetakSalinanPutusan', $perkara->id) }}" class="btn btn-sm btn-success">Cetak Salinan Putusan</a>
                                    </td>
                                </tr>
                            @endforeach
                            
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        

    </div>

    
</div>
@endsection