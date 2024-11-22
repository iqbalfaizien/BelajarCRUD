<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul }}</title>
</head>
<body>
    <h3>{{ $judul }}</h3>
    <form action="{{ route('anggota.update', $edit->id) }}" method="POST">
        @method('put')
        @csrf

        <label>Nama</label><br>
        <input type="text" name="nama" id="" placeholder="Masukkan Nama Lengkap" value="{{ old('nama', $edit->nama) }}" 
        class="form-control @error('nama') is-invalid @enderror">
        @error('nama')
            <span class="invalid-feedback alert-danger"
            role="alert">
            {{ $message }}
            </span>
        @enderror
        <br><br>
    
        <label>HP</label><br>
        <input type="text" name="hp" id="" placeholder="Masukkan Nomor HP" value="{{ old('hp', $edit->hp) }}" 
        class="form-control @error('hp') is-invalid @enderror">
        @error('hp')
            <span class="invalid-feedback alert-danger"
            role="alert">
            {{ $message }}
            </span>
        @enderror
        <br><br>

    <button type="submit">Perbarui</button>
    <a href="{{ route('anggota.index') }}">
        <button type="button">Batal</button>
    </a>
    </form>
</body>
</html>