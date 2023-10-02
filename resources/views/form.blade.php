<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Form Contoh</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Tugas PBKK Form</h2>
        <form method="POST" action="/form" enctype="multipart/form-data">
            @csrf
            <!-- Field 1: Nama -->
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
                @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Field 2: Alamat -->
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                @error('alamat')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Field 3: Gambar -->
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar" accept=".png, .jpg, .jpeg" required>
                <small class="form-text text-muted">Maksimal 2 MB</small>
                @error('gambar')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Field 4: Email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Field 5: Nilai Double -->
            <div class="form-group">
                <label for="nilai_double">Nilai Double (2.50 - 99.99):</label>
                <input type="number" class="form-control" id="nilai_double" name="nilai_double" step="0.01" min="2.50" max="99.99" required>
                @error('nilai_double')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
