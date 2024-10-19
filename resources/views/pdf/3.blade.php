
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
    <!-- Header for KWITANSI PEMBAYARAN AKTA CERAI -->
    <div class="header" style="margin-top: 40px;">
        <h3>KWITANSI PEMBAYARAN AKTA CERAI</h3>
    </div>

    <div class="details">
        <p>Kami menyampaikan kepada Saudara/i:</p>
        <table class="no-border" style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 40%;">Nomor Perkara</td>
                <td>:</td>
                <td>{{ $perkara->nomor_perkara ?? '..................................................' }}</td> <!-- Nomor Perkara -->
            </tr>
            <tr>
                <td>Nomor Akta Cerai</td>
                <td>:</td>
                <td>{{ $perkara->nomor_akta ?? '.................................................' }}</td> <!-- Nomor Akta Cerai -->
            </tr>
            <tr>
                <td>Tanggal Pembayaran</td>
                <td>:</td>
                <td>{{ $formattedDate ?? '.........................................' }}</td> <!-- Tanggal Pembayaran -->
            </tr>
            
            <tr>
                <td>Jumlah Pembayaran</td>
                <td>:</td>
                <td>Rp.......................................</td>
            </tr>
        </table>
    </div>

    <!-- Signature Section -->
    <div class="details signature" style="margin-top: 40px;">
        <table class="no-border">
            <tr>
                <td style="text-align: left; width: 50%;">
                    Yang Menerima
                    <br>
                    Meja III
                    <br><br><br><br><br><br><br><br>
                    <span style="border-top: 1px dotted black; display: inline-block; width: 200px;"></span>
                </td>
                <td style="text-align: center; width: 25%;">
                    <span style="display: inline-block; width: 150px;"></span> <!-- For spacing -->
                </td>
                <td style="text-align: right; width: 50%;">
                    Yang Menyerahkan
                    <br><br><br><br><br><br><br><br><br>
                    {!! $perkara->nama ?? '<span style="display: inline-block; width: 150px;"></span>' !!}
                </td>
            </tr>
        </table>
    </div>
</div>
