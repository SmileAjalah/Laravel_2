<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Barang</title>

</head>

<body>

    <div class="container-fluid mt-3">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Tanggal Pembelian</th>
                    <th scope="col">Type Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Kode Investaris</th>
                    <th scope="col" colspan="2">Edit Atau Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $b)
                    <tr>
                        <th scope="row">{{ $b->kode_barang }}</th>
                        <td>{{ $b->nama_barang }}</td>
                        <td>{{ $b->tanggal_pembelian }}</td>
                        <td>{{ $b->type_barang }}</td>
                        <td>{{ $b->harga_barang }}</td>
                        <td>{{ $b->jumlah }}</td>
                        <td>{{ $b->keterangan }}</td>
                        <td>{{ $b->kode_investaris }}</td>
                        <td><a href="{{ route('br.edit',$b->id) }}"><button class="btn btn-secondary">Edit</button></a></td>
                        <td><form action="{{ route('br.delete',$b->id) }}" method="post"><button class="btn btn-danger">Delete</button>
                            @csrf
                            @method('delete')
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('br.create') }}" class="float-right"><button class="btn btn-success">Tambah</button></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>
