<!DOCTYPE html>
<html>
  <head>
    <title>Form Edit Pembayaran Air</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="my-3">Form Edit Pembayaran Air</h1>
      <a href="{{ route('index') }}" class="btn btn-outline-success"><span data-feather="arrow-left-circle"></span></a>
      <form action="{{ route('update', $pembayaranAir) }}" method="post" class="my-5">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="bill_id">No Pelanggan IPL Graha Raya</label>
          <input type="text" class="form-control" id="bill_id" name="bill_id" value="{{ $pembayaranAir->bill_id }}">
        </div>
        <div class="form-group">
          <label for="bill_name">Nama Pelanggan</label>
          <input type="text" class="form-control" id="bill_name" name="bill_name" value="{{ $pembayaranAir->bill_name }}" required>
        </div>
        <div class="form-group">
          <label for="bill_address">Kode Blok</label>
          <input type="text" class="form-control" id="bill_address" name="bill_address" value="{{ $pembayaranAir->bill_address }}" required>
        </div>
        <div class="form-group">
          <label for="bill_periode">Periode tagihan berjalan</label>
          <input type="text" class="form-control" id="bill_periode" name="bill_periode" value="{{ $pembayaranAir->bill_periode }}" required>
        </div>
        <div class="form-group">
          <label for="bill_due_date">Tanggal jatuh tempo tagihan</label>
          <input type="date" class="form-control" id="bill_due_date" name="bill_due_date" value="{{ $pembayaranAir->bill_due_date }}" required>
        </div>
        <div class="form-group">
          <label for="bill_desc">Keterangan Invoice</label>
          <input type="text" class="form-control" id="bill_desc" name="bill_desc" value="{{ $pembayaranAir->bill_desc }}">
        </div>
        <div class="form-group">
          <label for="bill_abonemen">Tagihan Minimal yang harus dibayar</label>
          <input type="text" class="form-control" id="bill_abonemen" name="bill_abonemen" value="{{ $pembayaranAir->bill_abonemen }}" required>
        </div>
        <div class="form-group">
          <label for="bill_air">Tagihan Air</label>
          <input type="text" class="form-control" id="bill_air" name="bill_air" value="{{ $pembayaranAir->bill_air }}" required>
        </div>
        <div class="form-group">
          <label for="bill_ipl">Tagihan IPL</label>
          <input type="text" class="form-control" id="bill_ipl" name="bill_ipl" value="{{ $pembayaranAir->bill_ipl }}" required>
        </div>
        <div class="form-group">
          <label for="bill_disc_air">Diskon Air</label>
          <input type="text" class="form-control" id="bill_disc_air" name="bill_disc_air" value="{{ $pembayaranAir->bill_disc_air }}">
        </div>
        <div class="form-group">
          <label for="bill_disc_ipl">Diskon IPL</label>
          <input type="text" class="form-control" id="bill_disc_ipl" name="bill_disc_ipl" value="{{ $pembayaranAir->bill_disc_ipl }}">
        </div>
        <div class="form-group">
          <label for="bill_denda">Denda</label>
          <input type="text" class="form-control" id="bill_denda" name="bill_denda" value="{{ $pembayaranAir->bill_denda }}">
        </div>
        <div class="form-group">
          <label for="bill_total_amount">Total Tagihan</label>
          <input type="text" class="form-control" id="bill_total_amount" name="bill_total_amount" value="{{ $pembayaranAir->bill_total_amount }}" required>
        </div>
        <div class="form-group">
          <label for="bill_resp_stat">Recipe Status</label>
          <input type="text" class="form-control" id="bill_resp_stat" name="bill_resp_stat" value="{{ $pembayaranAir->bill_resp_stat }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Tagihan</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>