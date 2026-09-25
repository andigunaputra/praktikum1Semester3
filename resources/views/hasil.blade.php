<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Konfirmasi - LaporBanjir</title>
    <style>
        body {
            background-color: #f4f7f6;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .kotak-utama {
            width: 400px;
            margin: 60px auto;
            background: white;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #27ae60;
            margin-bottom: 20px;
            font-size: 22px;
        }
        .info-box {
            background: #f9f9f9;
            border-left: 4px solid #27ae60;
            padding: 12px 15px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #333;
            line-height: 1.6;
        }
        .info-box p {
            margin: 6px 0;
        }
        .btn-kembali {
            display: block;
            text-align: center;
            background-color: #7f8c8d;
            color: white;
            padding: 10px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
        }
        .btn-kembali:hover {
            background-color: #707b7c;
        }
    </style>
</head>
<body>

    <div class="kotak-utama">
        <h2>Laporan Berhasil</h2>
        
        <div class="info-box">
            <p><strong>Nama Pelapor:</strong> {{ $nama_pelapor }}</p>
            <p><strong>Lokasi:</strong> {{ $lokasi }}</p>
            <p><strong>Tinggi Genangan:</strong> {{ $tinggi_genangan }} cm</p>
            <p><strong>Status:</strong> <span style="color: {{ $warna_status }}; font-weight: bold;">{{ $status }}</span></p>
        </div>

        <a href="/lapor-banjir" class="btn-kembali">Kembali Mengisi</a>
    </div>

</body>
</html>