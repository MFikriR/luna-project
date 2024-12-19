@extends('layouts.adminlayout')

@section('content')
<h1>Daftar Siswa</h1>
<div class="export-buttons">
    <a href="{{ route('siswa.export-pdf') }}" class="btn btn-success">Export as PDF</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Foto Profil</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswas as $s)
        <tr>
            <td>{{ $s->name }}</td>
            <td>{{ $s->email }}</td>
            <td>{{ $s->tanggal_lahir }}</td>
            <td>{{ $s->jenis_kelamin }}</td>
            <td>
                @if($s->foto_profil)
                    <img src="{{ asset('images/profiles/' . ($s->foto_profil ?? 'default.png')) }}" alt="Foto Profil" width="100">
                @else
                    Tidak ada
                @endif
            </td>
            <td>{{ $s->role }}</td>
            <td>
                <a href="javascript:void(0)" onclick="openEditModal({{ json_encode($s) }})" class="btn btn-primary">Update</a>
                <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal untuk Edit Data -->
<div id="editModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Edit Data Siswa</h2>
        <form id="editForm" action="#" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" id="editId" name="id">
            <label for="name">Name:</label>
            <input type="text" id="editName" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="editEmail" name="email" required>
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="editTanggalLahir" name="tanggal_lahir" required>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="editJenisKelamin" name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <label for="foto_profil">Foto Profil:</label>
            <input type="file" name="foto_profil" accept="image/*">
            <button type="submit">Update Siswa</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('editModal');
        const closeBtn = document.querySelector('.close');

        // Buka modal dengan data siswa
        window.openEditModal = function(siswa) {
            modal.style.display = 'flex';
            document.getElementById('editId').value = siswa.id;
            document.getElementById('editName').value = siswa.name;
            document.getElementById('editEmail').value = siswa.email;
            document.getElementById('editTanggalLahir').value = siswa.tanggal_lahir;
            document.getElementById('editJenisKelamin').value = siswa.jenis_kelamin;
            document.getElementById('editForm').action = `/siswa/${siswa.id}`; // Set action ke route update
        }

        // Tutup modal
        closeBtn.addEventListener('click', function () {
            modal.style.display = 'none';
        });

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        };
    });
</script>
@endsection
