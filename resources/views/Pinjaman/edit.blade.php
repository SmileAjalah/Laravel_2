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
        <form action="{{ route('pn.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="tanggalPinjam]">Tanggal Pinjam</label>
                        <input type="text" class="form-control" id="tanggalPinjam" name="tanggalPinjam" required
                            value="{{ $edit->tanggalPinjam }}">
                        @error('tanggalPinjam')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="barang_id">Code BarangRuang</label>
                        <input type="text" class="form-control" id="barang_id" name="barang_id"
                            required value="{{ $edit->barang_id }}">
                        @error('barang_id')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
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
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="user_id">Code Penanggungjawab</label>
                        <input type="text" class="form-control" id="user_id" name="user_id" required
                            value="{{ $edit->user_id }}">
                        @error('user_id')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggalkembali">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required
                            value="{{ $edit->keterangan }}">
                        @error('keterangan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggalKembali">Tanggal Kembali</label>
                        <input type="text" class="form-control" id="tanggalKembali" name="tanggalKembali" required
                            value="{{ $edit->tanggalKembali }}">
                        @error('tanggalKembali')
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
