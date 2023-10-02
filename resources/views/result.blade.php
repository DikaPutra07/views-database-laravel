<!DOCTYPE html>
<html>
<head>
    <title>Hasil Submit Form</title>
    <!-- Memasukkan Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h2>Hasil</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Gambar</th>
                <th>Email</th>
                <th>Nilai Double</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
            <tr>
                <td>{{ $result->nama }}</td>
                <td>{{ $result->alamat }}</td>
                <td>
                    <img src="{{ asset('storage/' . $result->gambar) }}" alt="{{ $result->gambar }}" width="100">
                </td>
                <td>{{ $result->email }}</td>
                <td>{{ $result->nilai_double }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

