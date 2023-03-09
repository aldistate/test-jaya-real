<!DOCTYPE html>
<html>
  <head>
    <title>Data Pembayaran Air</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Data Pembayaran Air</h3>
          </div>
          <div class="card-body">
              <table class="table table-bordered table-striped">
                  <tbody>
                      <tr>
                          <th>No. Pelanggan IPL Graha Raya</th>
                          <td>{{ $pembayaran_air->bill_id }}</td>
                      </tr>
                      <tr>
                          <th>Nama Pelanggan</th>
                          <td>{{ $pembayaran_air->bill_name }}</td>
                      </tr>
                      <tr>
                          <th>Kode Blok</th>
                          <td>{{ $pembayaran_air->bill_address }}</td>
                      </tr>
                      <tr>
                          <th>Periode Tagihan Berjalan</th>
                          <td>{{ $pembayaran_air->bill_periode }}</td>
                      </tr>
                      <tr>
                          <th>Tanggal Jatuh Tempo Tagihan</th>
                          <td>{{ $pembayaran_air->bill_due_date }}</td>
                      </tr>
                      <tr>
                          <th>Keterangan Invoice</th>
                          <td>{{ $pembayaran_air->bill_desc }}</td>
                      </tr>
                      <tr>
                          <th>Tagihan Minimal yang Harus Dibayar</th>
                          <td>Rp. {{ $pembayaran_air->bill_abonemen }}</td>
                      </tr>
                      <tr>
                          <th>Tagihan Air</th>
                          <td>Rp. {{ $pembayaran_air->bill_air }}</td>
                      </tr>
                      <tr>
                          <th>Tagihan IPL</th>
                          <td>Rp. {{ $pembayaran_air->bill_ipl }}</td>
                      </tr>
                      <tr>
                          <th>Diskon Tagihan Air</th>
                          <td>{{ $pembayaran_air->bill_disc_air }}%</td>
                      </tr>
                      <tr>
                          <th>Diskon Tagihan IPL</th>
                          <td>{{ $pembayaran_air->bill_disc_ipl }}%</td>
                      </tr>
                      <tr>
                          <th>Denda</th>
                          <td>Rp. {{ $pembayaran_air->bill_denda }}</td>
                      </tr>
                      <tr>
                          <th>Total Tagihan</th>
                          <td>Rp. {{ $pembayaran_air->bill_total_amount }}</td>
                      </tr>
                      <tr>
                          <th>Status</th>
                          <td>{{ $pembayaran_air->bill_resp_stat }}</td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <div class="card-footer">
              <a href="#" class="btn btn-secondary">Kembali</a>
          </div>
      </div>
  </div>
  </body>
</html>