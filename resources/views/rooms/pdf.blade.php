<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Ruang Studio The Hunk</title>
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
        <p>Daftar Ruang Studio</p>
        <p>Tanggal Cetak: {{ now()->format('d-m-Y H:i:s') }}</p>
    </div>

    @if($rooms->count() > 0)
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ruang</th>
                <th>Kapasitas</th>
                <th>Peralatan</th>
                <th>Harga/Jam</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $key => $room)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $room->name }}</td>
                <td>{{ $room->capacity }} orang</td>
                <td>{{ $room->equipment }}</td>
                <td>Rp {{ number_format($room->rate_per_hour, 2, ',', '.') }}</td>
                <td>{{ $room->description ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p style="text-align: center; color: #999;">Tidak ada ruang studio untuk ditampilkan.</p>
    @endif

    <div class="footer">
        <p>Laporan ini digenerate secara otomatis oleh Sistem Studio The Hunk</p>
    </div>
</body>
</html>
