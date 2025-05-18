<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
        <h2>Form Tambah Data Tamu</h2>
        <form action="{{ route('tamu.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_tamu" class="form-label">Nama Tamu</label>
                <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" required>
            </div>
            <div class="mb-3">
                <label for="instansi" class="form-label">Instansi</label>
                <input type="text" class="form-control" id="instansi" name="instansi" required>
            </div>
            <div class="mb-3">
                <label for="tujuan_kunjungan" class="form-label">Tujuan Kunjungan</label>
                <input type="text" class="form-control" id="tujuan_kunjungan" name="tujuan_kunjungan" required>
            </div>
            <div class="mb-3">
                <label for="waktu_kunjungan" class="form-label">Waktu Kunjungan</label>
                <input type="datetime-local" class="form-control" id="waktu_kunjungan" name="waktu_kunjungan" required>
            </div>
            <div class="mb-3">
                <label for="kontak" class="form-label">Kontak (opsional)</label>
                <input type="text" class="form-control" id="kontak" name="kontak">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">status</label>
                <input type="text" class="form-control" id="status" name="status">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('tamu.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
  </body>
</html>
