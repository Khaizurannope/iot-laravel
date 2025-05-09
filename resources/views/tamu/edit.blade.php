<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
      <div class="card shadow-sm">
        <div class="card-header">
          <h4>Edit Data Tamu</h4>
        </div>
        <div class="card-body">
          <form action="{{ route('tamu.update', $tamu->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="nama_tamu" class="form-label">Nama Tamu</label>
              <input type="text" class="form-control" name="nama_tamu" value="{{ $tamu->nama_tamu }}" required>
            </div>
            <div class="mb-3">
              <label for="instansi" class="form-label">Instansi</label>
              <input type="text" class="form-control" name="instansi" value="{{ $tamu->instansi }}" required>
            </div>
            <div class="mb-3">
              <label for="tujuan_kunjungan" class="form-label">Tujuan Kunjungan</label>
              <input type="text" class="form-control" name="tujuan_kunjungan" value="{{ $tamu->tujuan_kunjungan }}" required>
            </div>
            <div class="mb-3">
              <label for="waktu_kunjungan" class="form-label">Waktu Kunjungan</label>
              <input type="datetime-local" class="form-control" name="waktu_kunjungan" value="{{ date('Y-m-d\TH:i', strtotime($tamu->waktu_kunjungan)) }}" required>
            </div>
            <div class="mb-3">
              <label for="kontak" class="form-label">Kontak</label>
              <input type="text" class="form-control" name="kontak" value="{{ $tamu->kontak }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('tamu.index') }}" class="btn btn-secondary">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
