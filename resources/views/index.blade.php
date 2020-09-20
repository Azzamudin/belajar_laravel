<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

<h2>www.malasngoding.com</h2>
<h3>Data Pegawai</h3>

<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

<br/>
<br/>

<table boder='1'>
    <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Umur</th>
        <th>ALamat</th>
        <th>Opsi</th>
    </tr>
    @foreach($pegawai as $p)
    <tr>
        <td>{{ $p->pegawai_nama }}</td>
        <td>{{ $p->pegawai_jabatan }}</td>
        <td>{{ $p->pegawai_umur }}</td>
        <td>{{ $p->pegawai_alamat }}</td>
        <td>
            <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>

            <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>


</body>
</html>