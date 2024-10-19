
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