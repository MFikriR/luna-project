<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
            <tr>
                <td>{{ $siswa->name }}</td>
                <td>{{ $siswa->email }}</td>
                <td>{{ $siswa->tanggal_lahir }}</td>
                <td>{{ $siswa->jenis_kelamin }}</td>
                <td>{{ $siswa->role }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
