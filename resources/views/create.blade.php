<!DOCTYPE html>
<html>
  <head>
    <title>Form Create Pembayaran Air</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="my-3">Form Create Pembayaran Air</h1>
      <form action="{{ route('create') }}" method="post" class="my-5">
        @csrf
        <div class="form-group">
          <label for="bill_id">No Pelanggan IPL Graha Raya</label>
          <input type="text" class="form-control" id="bill_id" name="bill_id" placeholder="Masukkan No Pelanggan IPL Graha Raya" required autofocus>
        </div>
        <div class="form-group">
          <label for="bill_name">Nama Pelanggan</label>
          <input type="text" class="form-control" id="bill_name" name="bill_name" placeholder="Masukkan Nama Pelanggan" required>
        </div>
        <div class="form-group">
          <label for="bill_address">Kode Blok</label>
          <input type="text" class="form-control" id="bill_address" name="bill_address" placeholder="Masukkan Kode Blok" required>
        </div>
        <div class="form-group">
          <label for="bill_periode">Periode tagihan berjalan</label>
          <input type="text" class="form-control" id="bill_periode" name="bill_periode" placeholder="Masukkan Periode tagihan berjalan" required>
        </div>
        <div class="form-group">
          <label for="bill_due_date">Tanggal jatuh tempo tagihan</label>
          <input type="date" class="form-control" id="bill_due_date" name="bill_due_date" required>
        </div>
        <div class="form-group">
          <label for="bill_desc">Keterangan Invoice</label>
          <input type="text" class="form-control" id="bill_desc" name="bill_desc" placeholder="Masukkan Keterangan Invoice">
        </div>
        <div class="form-group">
          <label for="bill_abonemen">Tagihan Minimal yang harus dibayar</label>
          <input type="text" class="form-control" id="bill_abonemen" name="bill_abonemen" placeholder="Masukkan Tagihan Minimal yang harus dibayar" required>
        </div>
        <div class="form-group">
          <label for="bill_air">Tagihan Air</label>
          <input type="text" class="form-control" id="bill_air" name="bill_air" placeholder="Masukkan Tagihan Air" required>
        </div>
        <div class="form-group">
          <label for="bill_ipl">Tagihan IPL</label>
          <input type="text" class="form-control" id="bill_ipl" name="bill_ipl" placeholder="Masukkan Tagihan IPL" required>
        </div>
        <div class="form-group">
          <label for="bill_disc_air">Diskon Air</label>
          <input type="text" class="form-control" id="bill_disc_air" name="bill_disc_air" placeholder="Masukkan Diskon Air">
        </div>
        <div class="form-group">
          <label for="bill_disc_ipl">Diskon IPL</label>
          <input type="text" class="form-control" id="bill_disc_ipl" name="bill_disc_ipl" placeholder="Masukkan Diskon IPL">
        </div>
        <div class="form-group">
          <label for="bill_denda">Denda</label>
          <input type="text" class="form-control" id="bill_denda" name="bill_denda" placeholder="Masukkan Denda">
        </div>
        <div class="form-group">
          <label for="bill_total_amount">Total Tagihan</label>
          <input type="text" class="form-control" id="bill_total_amount" name="bill_total_amount" placeholder="Total Tagihan" required>
        </div>
        <div class="form-group">
          <label for="bill_resp_stat">Recipe Status</label>
          <input type="text" class="form-control" id="bill_resp_stat" name="bill_resp_stat" placeholder="Recipe Status" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Tagihan</button>
      </form>
    </div>
  </body>
</html>