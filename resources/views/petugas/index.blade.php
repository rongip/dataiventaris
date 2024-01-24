{{-- @extends('layouts.app')

@section('content') --}}
<div class="container mt-5">
    <h1 class="mb-4">Daftar Petugas</h1>

    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Level</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($petugas as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->username }}</td>
                <td>{{ $p->level }}</td>
                <td>
                    <form action="{{ route('petugas.edit', $p->id) }}" method="get" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                    </form>
                    <form action="{{ route('petugas.destroy', $p->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus petugas ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Tidak ada data petugas.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- @endsection --}}
