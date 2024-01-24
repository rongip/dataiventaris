{{-- @extends('layouts.app') --}}
<div class="container mt-5">
    <div class="card p-4">
        <h1 class="mb-4">Registrasi Petugas</h1>

        <form method="post" action="{{ route('petugas.store') }}" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" name="nama" required>
            </div>

            <div class="col-md-6">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" name="username" required>
            </div>

            <div class="col-md-6">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <div class="col-md-6">
                <label for="level" class="form-label">Level:</label>
                <select class="form-select" name="level" required>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>

            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Daftarkan Petugas</button>
            </div>
        </form>
    </div>
</div>
