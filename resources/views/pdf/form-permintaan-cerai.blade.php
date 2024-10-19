
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
<div class="container">
    <!-- Header Section -->
    <div class="header">
        <h3>FORMULIR PERMINTAAN AKTA CERAI</h3>
    </div>

    <!-- Menggunakan satu instance dari $perkara karena kita hanya ingin satu item -->
    <div class="details">
        <p>Permintaan Akta Cerai</p>
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
                <td>{{ $perkara->nama ?? '-' }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $perkara->alamat ?? '-' }}</td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td>:</td>
                <td>{{ $perkara->nomor_telepon ?? '-' }}</td>
            </tr>
            <tr>
                <td>Sebagai Pihak</td>
                <td>:</td>
                <td>{{ $perkara->pihak ?? '-' }}</td>
            </tr>
        </table>
    </div>

    <!-- Table Section -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Hal terkait Permohonan Akta Cerai</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Bentuk Akta Cerai yang Tersedia</td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Biaya yang Dibutuhkan</td>
                <td>PNBP Rp</td>
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
        <p>{{ $perkara->nama ?? '-' }}</p>
    </div>
</div>
