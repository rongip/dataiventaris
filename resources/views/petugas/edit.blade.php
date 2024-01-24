<!-- resources/views/petugas/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Edit Petugas</h1>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="post" action="{{ route('petugas.update', $petugas->id) }}">
            @csrf
            @method('put')
        
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="nama" value="{{ old('nama', $petugas->nama) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" value="{{ old('username', $petugas->username) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control">
                <small class="text-muted">Kosongkan jika tidak ingin mengubah password.</small>
            </div>

            <div class="mb-3">
                <label for="level" class="form-label">Level:</label>
                <select name="level" class="form-select" required>
                    <option value="admin" {{ old('level', $petugas->level) == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="petugas" {{ old('level', $petugas->level) == 'petugas' ? 'selected' : '' }}>Petugas</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Perbarui Data</button>
        </form>
    </div>
@endsection
