<!DOCTYPE html>
<html>
  <head>
    <title>Index Pembayaran Air</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="text-center mb-3">Index Pembayaran Air</h1>
      <div class="row mb-3">
          <div class="col-md-3">
              <a href="{{ route('create') }}" class="btn btn-primary">Tambah Pembayaran Air</a>
          </div>
      </div>
      {{-- kondisi jika data berhasil ditambahkan --}}
      @if (session()->has('sukses'))
        <div class="alert alert-success col-lg-3 text-center" role="alert">
          <span data-feather="check"></span> {{ session('sukses') }}
        </div>
      @endif
      <table class="table">
        <caption>List of Data Pembayaran Air</caption>
        <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">No Pelanggan</th>
              <th scope="col">Nama Pelanggan</th>
              <th scope="col" class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pembayaranAir as $pembayaran)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pembayaran->bill_id }}</td>
                <td>{{ $pembayaran->bill_name }}</td>
                <td class="text-center">
                  <a href="{{ route('show', $pembayaran) }}" class="badge bg-info mx-1"><span data-feather="eye"></span></a>
                  <a href="{{ route('edit', $pembayaran) }}" class="badge bg-warning mx-1"><span data-feather="edit"></span></a>
                  <form action="{{ route('delete', $pembayaran) }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Apa anda yakin ingin menghapusnya?')"><span data-feather="trash-2"></span></button>
                  </form>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>