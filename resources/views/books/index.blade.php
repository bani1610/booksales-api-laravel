
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>Data Buku</title>
</head>
<body>

    <h1>Daftar Buku</h1>

    <a href="/authors">Data Author</a> |
    <a href="/genres">Data Genre</a>

    <hr>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Cover</th>
                <th>Genre</th>
                <th>Penulis</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->description }}</td>
                    <td>
                        Rp {{ number_format($book->price, 0, ',', '.') }}
                    </td>
                    <td>{{ $book->stock }}</td>
                    <td>{{ $book->cover_photo }}</td>
                    <td>{{ $book->genre->name }}</td>
                    <td>{{ $book->author->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
