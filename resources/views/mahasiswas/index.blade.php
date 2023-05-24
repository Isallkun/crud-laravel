<!-- resources/views/mahasiswas/index.blade.php -->

<h1>List of Mahasiswa</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('mahasiswas.create') }}" class="btn btn-primary">Create Mahasiswa</a>


<table class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Semester</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->jurusan }}</td>
            <td>{{ $mahasiswa->semester }}</td>
            <td>{{ $mahasiswa->email }}</td>
            <td>
                <a href="{{ route('mahasiswas.edit', $mahasiswa->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('mahasiswas.destroy', $mahasiswa->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Mahasiswa?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
