<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Barang Ruang</title>

</head>

<body>

    <div class="container mt-3">
        <h1 class="text-center mb-3">Pinjaman Baru</h1>
        <form action="{{ route('bg.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_barang">Tanggal Pinjam</label>
                <input type="text" class="form-control" id="id_barang" name="id_barang" required
                    value="{{ $edit->id_barang }}">
                @error('id_barang')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah" required
                            value="{{ $edit->jumlah }}">
                        @error('jumlah')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="baik">Baik</label>
                        <input type="text" class="form-control" id="baik" name="baik"
                            required value="{{ $edit->baik }}">
                        @error('baik')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="rusakdiperbaiki">Rusak Diperbaiki</label>
                        <input type="text" class="form-control" id="rusakdiperbaiki" name="rusakdiperbaiki" required
                            value="{{ $edit->rusakdiperbaiki }}">
                        @error('rusakdiperbaiki')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="rusaktidakdiperbaiki">Rusak Tidak Diperbaiki</label>
                        <input type="text" class="form-control" id="rusaktidakdiperbaiki" name="rusaktidakdiperbaiki" required
                            value="{{ $edit->rusaktidakdiperbaiki }}">
                        @error('rusaktidakdiperbaiki')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kode_ruang">Code Ruang</label>
                        <input type="text" class="form-control" id="kode_ruang" name="kode_ruang" required
                            value="{{ $edit->kode_ruang }}">
                        @error('kode_ruang')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_pinjam">Code Pinjam</label>
                        <input type="text" class="form-control" id="id_pinjam" name="id_pinjam" required
                            value="{{ $edit->id_pinjam }}">
                        @error('id_pinjam')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <a href="/pinjaman" class="mr-3"><button class="btn btn-secondary">Kembali</button></a>
            <button type="submit" class="btn btn-success">Edit</button>
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
