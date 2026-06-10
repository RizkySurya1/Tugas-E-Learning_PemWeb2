<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Paket Layanan Studio The Hunk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 3px solid #1F4788;
            padding-bottom: 10px;
        }
        .header h1 {
            margin: 0;
            color: #1F4788;
            font-size: 24px;
        }
        .header p {
            margin: 5px 0;
            color: #666;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th {
            background-color: #1F4788;
            color: white;
            padding: 12px;
            text-align: left;
            font-weight: bold;
            border: 1px solid #1F4788;
        }
        td {
            padding: 10px 12px;
            border: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .footer {
            margin-top: 30px;
            text-align: right;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🎸 STUDIO THE HUNK</h1>
        <p>Laporan Paket Layanan</p>
        <p>Tanggal Cetak: {{ now()->format('d-m-Y H:i:s') }}</p>
    </div>

    @if($packages->count() > 0)
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Paket</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Durasi</th>
                <th>Termasuk</th>
            </tr>
        </thead>
        <tbody>
            @foreach($packages as $key => $package)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $package->name }}</td>
                <td>{{ $package->description }}</td>
                <td>Rp {{ number_format($package->price, 2, ',', '.') }}</td>
                <td>{{ $package->duration_hours }} jam</td>
                <td>{{ $package->includes }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p style="text-align: center; color: #999;">Tidak ada paket layanan untuk ditampilkan.</p>
    @endif

    <div class="footer">
        <p>Laporan ini digenerate secara otomatis oleh Sistem Studio The Hunk</p>
    </div>
</body>
</html>
