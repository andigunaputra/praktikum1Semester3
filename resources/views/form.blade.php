<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi LaporBanjir - BPBD</title>
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
            color: #2c3e50;
            margin-bottom: 25px;
            font-size: 22px;
        }
        .form-grup {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #34495e;
            font-weight: bold;
            font-size: 14px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 9px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        input:focus {
            border-color: #3498db;
            outline: none;
        }
        .btn-kirim {
            width: 100%;
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 15px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
        }
        .btn-kirim:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="kotak-utama">
        <h2>Form Pelaporan Banjir</h2>
        
        <form action="/lapor-banjir/proses" method="POST">
            @csrf
            
            <div class="form-grup">
                <label>Nama Pelapor:</label>
                <input type="text" name="nama_pelapor" placeholder="Nama lengkap Anda..." required>
            </div>

            <div class="form-grup">
                <label>Lokasi Kejadian (Kecamatan/Desa):</label>
                <input type="text" name="lokasi" placeholder="Contoh: Baleendah" required>
            </div>

            <div class="form-grup">
                <label>Tinggi Genangan Air (cm):</label>
                <input type="number" name="tinggi_genangan" placeholder="Contoh: 75" required>
            </div>

            <button type="submit" class="btn-kirim">Kirim Laporan</button>
        </form>
    </div>

</body>
</html>