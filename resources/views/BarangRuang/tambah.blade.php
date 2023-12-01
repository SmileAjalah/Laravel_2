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

    <div class="container mt-3">
        <h1 class="text-center mb-3">Pinjaman Baru</h1>
        <form action="{{ route('bg.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_barang">Code Barang</label>
                <input type="text" class="form-control" id="id_barang" name="id_barang" required>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah" required>
                    </div>
                    <div class="form-group">
                        <label for="baik">Baik</label>
                        <input type="text" class="form-control" id="baik" name="baik" required>
                    </div>
                    <div class="form-group">
                        <label for="rusakdiperbaiki">Rusak Diperbaiki</label>
                        <input type="text" class="form-control" id="rusakdiperbaiki" name="rusakdiperbaiki"
                            required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="rusaktidakdiperbaiki">Rusak Tidak Diperbaiki</label>
                        <input type="text" class="form-control" id="rusaktidakdiperbaiki" name="rusaktidakdiperbaiki" required>
                    </div>
                    <div class="form-group">
                        <label for="kode_ruang">Code Ruang</label>
                        <input type="text" class="form-control" id="kode_ruang" name="kode_ruang" required>
                    </div>
                    <div class="form-group">
                        <label for="id_pinjam">Code Pinjam</label>
                        <input type="text" class="form-control" id="id_pinjam" name="id_pinjam" required>
                    </div>
                </div>
            </div>
            <a href="/barangruang" class="mr-3"><button class="btn btn-secondary">Kembali</button></a>
            <button type="submit" class="btn btn-success">Tambah</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>
