<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>
    <h1>Nama : Muhammad Nizar Al-Faiq </h1>
    <h1>Nim : 0110223298 </h1>
    <h1>Jurusan : Teknik Informatika </h1>

    @if($students->isEmpty())
        <p>Terdaftar sebagai Mahasiswa</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->nama }}</td>
                        <td>{{ $student->nim }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->jurusan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>