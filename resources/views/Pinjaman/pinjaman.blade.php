<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Pinjaman</title>

</head>

<body>

    <div class="container-fluid mt-3">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Code BarangRuang</th>
                    <th scope="col">Nama BarangRuang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Code Penanggungjawab</th>
                    <th scope="col">Nama Penanggungjawab</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col" colspan="2">Edit Atau Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pinjaman as $p)
                    <tr>
                        <th scope="row">{{ $p->tanggalPinjam }}</th>
                        <td>{{ $p->barang_id }}</td>
                        <td>{{ $p->barang->kode_barang }}</td>
                        <td>{{ $p->jumlah }}</td>
                        <td>{{ $p->user_id }}</td>
                        <td>{{ $p->user->name }}</td>
                        <td>{{ $p->keterangan }}</td>
                        <td>{{ $p->tanggalKembali }}</td>
                        <td><a href="{{ route('pn.edit',$p->id) }}"><button class="btn btn-secondary">Edit</button></a></td>
                        <td><form action="{{ route('pn.delete',$p->id) }}" method="post"><button class="btn btn-danger">Delete</button>
                            @csrf
                            @method('delete')
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('pn.create') }}" class="float-right"><button class="btn btn-success">Tambah</button></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>
