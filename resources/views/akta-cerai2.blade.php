<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Permintaan Akta Cerai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .footer {
            text-align: right;
            margin-top: 20px;
            /* font-size: 12px; */
        }

        .details {
            margin-bottom: 20px;
        }

        .details p {
            margin: 5px 0;
        }

        .signature {
            margin-top: 40px;
        }

        .no-border {
        width: 100%;
        border-collapse: collapse; /* Menggabungkan border sel */
        border: none; /* Menghilangkan border luar tabel */
    }

    .no-border td {
        padding: 5px;
        border: none; /* Menghilangkan border dalam sel */
        vertical-align: top;
    }

    .no-border td:first-child {
        width: 150px; /* Atur lebar kolom pertama sesuai keinginan */
    }

    .no-border td:nth-child(2) {
        width: 10px; /* Lebar kecil untuk kolom titik dua */
    }
    </style>
</head>
<body>

<!-- Halaman 1 -->
<div class="container">
    <!-- Header Section -->
    <div class="header">
        <h3>FORMULIR PERMINTAAN AKTA CERAI</h3>
    </div>

    @foreach ($perkaras as $perkara)
        

    <!-- Detail Section -->
    <div class="details">
        <p>Permintaan Akta Cerai</p>
        {{-- <p>Tanggal        : ...........................................</p> --}}
        <p>Nama: {{ $perkara->nama ? $perkara->nama : '-' }}</p>

        <p>Nomor Perkara  : ......................................</p>
    </div>



    <div class="details">
        <p>Kami menyampaikan kepada Saudara/i:</p>
        <table class="no-border">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>..................................................</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>.................................................</td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td>:</td>
                <td>.........................................</td>
            </tr>
            <tr>
                <td>Sebagai Pihak</td>
                <td>:</td>
                <td>Penggugat/Pemohon/Tergugat/Termohon *(coret salah satu)</td>
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
        <p>Amurang, ...................................</p>
        <br>
        <br>
        <br>
        <br>
        <p>................................................</p>
    </div>
</div>

@endforeach
<!-- end of Halaman 1 -->

<!-- Halaman 2 -->
@include('pdf.2')
<!-- end of Halaman 2 -->

<!-- Halaman 3 -->
@include('pdf.3')
<!-- end of Halaman 3 -->

<!-- Halaman 4 -->
@include('pdf.4')
<!-- end of Halaman 4 -->

<!-- Halaman 5 -->
@include('pdf.5')
<!-- end of Halaman 5 -->

<!-- Halaman 6 -->
@include('pdf.6')
<!-- end of Halaman 6 -->

<!-- Halaman 7 -->
@include('pdf.7')
<!-- end of Halaman 7 -->

</body>
</html>
