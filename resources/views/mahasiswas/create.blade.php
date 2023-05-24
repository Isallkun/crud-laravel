<!-- resources/views/mahasiswas/create.blade.php -->

<h1>Create Mahasiswa</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('mahasiswas.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" name="nim" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="semester">Semester:</label>
        <input type="number" name="semester" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
