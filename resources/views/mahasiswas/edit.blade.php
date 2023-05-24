<!-- resources/views/mahasiswas/edit.blade.php -->

<h1>Edit Mahasiswa</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
    </div>
    <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
    </div>
    <div class="form-group">
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" class="form-control" value="{{ $mahasiswa->jurusan }}" required>
    </div>
    <div class="form-group">
        <label for="semester">Semester:</label>
        <input type="number" name="semester" class="form-control" value="{{ $mahasiswa->semester }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" value="{{ $mahasiswa->email }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
