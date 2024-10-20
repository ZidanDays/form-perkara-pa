
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
{{-- <div class="container" style="page-break-before: always;">    --}}
<div class="container">   
    <div class="container">
    <!-- Header Section -->
    <div class="header">
        <h3>FORMULIR PERMINTAAN SALINAN PUTUSAN/PENETAPAN</h3>
    </div>

    <!-- Detail Section -->

<!-- Detail Section -->
<div class="details">
    <p>Permintaan Salinan Putusan/Penetapan</p>
    {{-- <p>Tanggal : {{ $perkara->tanggal ?? '-' }}</p> <!-- Menggunakan null coalescing operator -->
    <p>Nomor Perkara: {{ $perkara->nomor_perkara ?? '-' }}</p> <!-- Menggunakan null coalescing operator --> --}}

    <table class="no-border">
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td>{{ $perkara->tanggal ?? '-' }}</td>
        </tr>
        <tr>
            <td>Nomor Perkara</td>
            <td>:</td>
            <td>{{ $perkara->nomor_perkara ?? '-' }}</td>
        </tr>
    </table>
</div>

<div class="details">
    <p>Kami menyampaikan kepada Saudara/i:</p>
    <table class="no-border">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $perkara->nama ?? '..................................................' }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $perkara->alamat ?? '.................................................' }}</td>
        </tr>
        <tr>
            <td>No. Telepon</td>
            <td>:</td>
            <td>{{ $perkara->nomor_telepon ?? '.........................................' }}</td>
        </tr>
        <tr>
            <td>Sebagai Pihak</td>
            <td>:</td>
            <td>{{ $perkara->pihak ?? 'Penggugat/Pemohon/Tergugat/Termohon *(coret salah satu)' }}</td>
        </tr>
    </table>
</div>

    

    <!-- Table Section -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Hal terkait Permohonan Salinan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Bentuk Salinan yang Tersedia</td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Biaya yang Dibutuhkan</td>
                <td>PNBP Rp.500 x .. Hal = Rp.</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Waktu Penyediaan</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <br>
    <!-- Footer Section -->
    <div class="footer">
        <p>Amurang, {{ $formattedDate }}</p>
        <br>
        <br>
        <br>
        <br>
        <p>{{ $perkara->nama ?? '..................................................' }}</p>
    </div>
</div>
</div>