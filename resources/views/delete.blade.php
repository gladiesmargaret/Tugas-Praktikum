<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Delete Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Form Delete Data Mahasiswa</h2>
        <form action="{{ route('delete', $mahasiswa->id_mahasiswa) }}" method='DELETE'>
            @csrf
            @method('DELETE')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" id="nama"  value="{{$mahasiswa->nama}}" required>
            </div>

            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" class="form-control" name="nim" id="nim" value="{{$mahasiswa->nim}}" required>
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" value="{{$mahasiswa->jurusan}}" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" name="alamat" id="alamat"  value="{{$mahasiswa->alamat}}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Delete</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

