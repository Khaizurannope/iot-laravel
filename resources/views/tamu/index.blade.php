<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Tamu - SMK TI BAZMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">SMK TI BAZMA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>



    <div class="container mt-4">
      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      <div class="d-flex justify-content-between mb-3">
        <h4>Daftar Kunjungan Tamu</h4>
        <a href="{{ route('tamu.create') }}" class="btn btn-secondary btn-lg">Tambah Data</a>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <table class="table table-hover">
            <thead class="table-light">
                <tr>
                  <th>Nama Tamu</th>
                  <th>Instansi</th>
                  <th>Tujuan</th>
                  <th>Waktu Kunjungan</th>
                  <th>Kontak</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($tamu as $item)
                <tr>
                  <td>{{ $item->nama_tamu }}</td>
                  <td>{{ $item->instansi }}</td>
                  <td>{{ $item->tujuan_kunjungan }}</td>
                  <td>{{ \Carbon\Carbon::parse($item->waktu_kunjungan)->format('d M Y H:i') }}</td>
                  <td>{{ $item->kontak }}</td>
                  <td>
                    <a href="{{ route('tamu.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('tamu.destroy', $item->id) }}" method="POST" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="6" class="text-center text-muted">Belum ada data kunjungan.</td>
                </tr>
                @endforelse
              </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
