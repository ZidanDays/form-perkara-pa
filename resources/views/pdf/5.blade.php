
                {{-- Format Tanggal --}}
                @php
                // Mengganti bulan dalam bahasa Indonesia
                $bulanIndo = [
                    'January' => 'Januari',
                    'February' => 'Februari',
                    'March' => 'Maret',
                    'April' => 'April',
                    'May' => 'Mei',
                    'June' => 'Juni',
                    'July' => 'Juli',
                    'August' => 'Agustus',
                    'September' => 'September',
                    'October' => 'Oktober',
                    'November' => 'November',
                    'December' => 'Desember',
                ];

                // Format tanggal dan ganti nama bulan
                $formattedDate = \Carbon\Carbon::parse($perkara->tanggal)->format('d-F-Y');
                $formattedDate = str_replace(array_keys($bulanIndo), array_values($bulanIndo), $formattedDate);
            @endphp
<div class="container" style="page-break-before: always;">
    <!-- Header Section -->
    <div class="header">
        <h3>BUKTI PENYERAHAN SALINAN PUTUSAN/PENETAPAN</h3>
    </div>

    <!-- Detail Section for Additional Information -->
    <div class="details">
        <p>Sudah diterima Salinan Putusan/Penetapan dari Pengadilan Agama Amurang.</p>
    </div>

    <div class="details">
        {{-- <p>Kami menyampaikan kepada Saudara/i:</p> --}}
        <table class="no-border" style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 40%;">Nomor Perkara</td>
                <td>:</td>
                <td>{{ $perkara->nomor_perkara ?? '..................................................' }}</td> <!-- Ganti dengan variabel nomor perkara -->
            </tr>
            <tr>
                <td>Nama Penggugat/Pemohon</td>
                <td>:</td>
                <td>{{ $perkara->nama_penggugat ?? '.........................................' }}</td> <!-- Ganti dengan variabel nama penggugat/pemohon -->
            </tr>
            <tr>
                <td>Nama Tergugat/Termohon</td>
                <td>:</td>
                <td>{{ $perkara->nama_tergugat ?? '.........................................' }}</td> <!-- Ganti dengan variabel nama tergugat/termohon -->
            </tr>
            <tr>
                <td>Tanggal Putusan</td>
                <td>:</td>
                <td>{{ $formattedDate ?? '.........................................' }}
            </tr>
            <tr>
                <td>Tanggal Penyerahan</td>
                <td>:</td>
                <td>{{ $formattedDate ?? '.........................................' }}
            </tr>
            <tr>
                <td>Ketua Majelis</td>
                <td>:</td>
                <td>{{ $perkara->nama_ketua_majelis ?? '.........................................' }}</td> <!-- Ganti dengan variabel ketua majelis -->
            </tr>
        </table>
    </div>
    
<br>

    <!-- Signature Section -->
    <div class="details signature" style="margin-top: 40px;">
        {{-- <table style="border-collapse: collapse; width: 100%;"> --}}
        <table class="no-border">
            <tr>
                <td style="text-align: left; width: 50%;">
                    Yang Menerima
                    <br><br><br><br><br><br><br><br>
                    {!! $perkara->nama ?? '<span style="display: inline-block; width: 150px;"></span>' !!}
                </td>
                <td style="text-align: center; width: 25%;">
                    <span style="display: inline-block; width: 150px;"></span> <!-- For spacing -->
                </td>
                <td style="text-align: right; width: 50%;">
                    Yang Menyerahkan
                    <br>
                    Meja III
                    <br><br><br><br><br><br><br>
                    <span style="border-top: 1px dotted black; display: inline-block; width: 200px;"></span>
                </td>
            </tr>
        </table>
    </div>




</div>
