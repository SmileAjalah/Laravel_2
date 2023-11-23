<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Ruang</title>

</head>

<body>

    <div class="container-fluid mt-3">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><h3>Nama Ruang</h3></th>
                    <th scope="col"><h3>Tanggal</h3></th>
                    <th scope="col"><h3>Edit</h3></th>
                    <th scope="col"><h3>Hapus</h3></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ruang as $r)
                    <tr>
                        <th scope="row"><h4>{{ $r->nama_ruang }}</h4></th>
                        <td><h4>{{ $r->tanggal }}</h4></td>
                        <td><a href="{{ route('rg.edit',$r->id) }}"><button class="btn btn-secondary">Edit</button></a></td>
                        <td><form action="{{ route('rg.delete',$r->id) }}" method="post"><button class="btn btn-danger">Delete</button>
                            @csrf
                            @method('delete')
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('rg.create') }}" class="float-right"><button class="btn btn-success">Tambah</button></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>
