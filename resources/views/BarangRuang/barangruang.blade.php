<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>BarangRuang</title>

</head>

<body>

    <div class="container-fluid mt-3">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Code Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Baik</th>
                    <th scope="col">Rusak Diperbaiki</th>
                    <th scope="col">Rusak Tidak Diperbaiki</th>
                    <th scope="col">Code Ruang</th>
                    <th scope="col">Code Pinjam</th>
                    <th scope="col" colspan="2">Edit Atau Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangruang as $br)
                    <tr>
                        <th scope="row">{{ $br->id_barang }}</th>
                        <td>{{ $br->jumlah }}</td>
                        <td>{{ $br->baik }}</td>
                        <td>{{ $br->rusakdiperbaiki }}</td>
                        <td>{{ $br->rusaktidakdiperbaiki }}</td>
                        <td>{{ $br->kode_ruang }}</td>
                        <td>{{ $br->id_pinjam }}</td>
                        <td><a href="{{ route('bg.edit',$br->id) }}"><button class="btn btn-secondary">Edit</button></a></td>
                        <td><form action="{{ route('bg.delete',$br->id) }}" method="post"><button class="btn btn-danger">Delete</button>
                            @csrf
                            @method('delete')
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('bg.create') }}" class="float-right"><button class="btn btn-success">Tambah</button></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>
