<h1>Aplikasi Pembayaran Air</h1>
<p>Aplikasi ini digunakan untuk mencatat pembayaran air pelanggan IPL Graha Raya. Aplikasi ini dibangun menggunakan framework Laravel versi 9 dan database MySQL. Aplikasi ini juga memiliki API untuk melakukan operasi CRUD pada data pembayaran air.</p>

<h2>Fitur</h2>
<p>Pembayaran Air memiliki fitur sebagai berikut:</p> 
  <ul>
    <li>Create : Menambahkan data pembayaran air ke dalam database</li>
    <li>Read : Menampilkan data pembayaran air dari database</li>
    <li>Update : Mengubah data pembayaran air yang sudah ada di database</li>
    <li>Delete : Menghapus data pembayaran air dari database</li>
  </ul>

<h2>Instalasi</h2>
<p>Berikut adalah langkah-langkah untuk menginstal aplikasi Pembayaran Air:</p>

<ol>
  <li>Clone repository ini <a href="https://github.com/aldistate/test-jaya-real.git">https://github.com/aldistate/test-jaya-real.git</a> atau download repository ini dan extract ke dalam folder yang diinginkan.</li>
  <li>Jalankan perintah 'composer install' pada terminal di folder aplikasi.</li>
  <li>Salin file .env.example menjadi .env , jalankan perintah 'cp .env.example .env' pada terminal</li>
  <li>Buat key baru untuk aplikasi, jalankan perintah 'php artisan key:generate' pada terminal</li>
  <li>Buatlah sebuah database baru di MySQL dengan nama 'kwt_pembayaran_ai'.</li>
  <li>Buka file .env dan ubah konfigurasi database sesuai dengan database yang sudah dibuat.</li>
  <li>Jalankan migrasi database, dengan perintah 'php artisan migrate'</li>
  <li>Jalankan server development, dengan perintah 'php artisan serve'</li>
  <li>Buka web browser dan akses http://localhost:8000 untuk membuka aplikasi.</li>
</ol>


<h2>Penggunaan</h2>
<p>Untuk menggunakan aplikasi Pembayaran Air, ikuti langkah-langkah berikut:</p>

<ol>
  <li>Buka aplikasi melalui web browser dengan mengakses http://localhost:8000.</li>
  <li>Pada halaman utama, akan terdapat tabel daftar pelanggan yang sudah terdaftar.</li>
  <li>Untuk menambahkan data pelanggan baru, klik tombol "Tambah Pembayaran Air" pada bagian atas tabel.</li>
  <li>Isikan data pelanggan pada form yang muncul dan klik tombol "Create Tagihan".</li>
  <li>Data pelanggan baru akan muncul pada tabel di halaman utama.</li>
  <li>Untuk melihat detail tagihan pelanggan, klik tombol bergambar mata pada kolom aksi pada tabel pelanggan.</li>
  <li>Pada halaman detail tagihan, akan ditampilkan informasi detail tagihan pelanggan.</li>
  <li>Untuk mengedit data pelanggan, klik tombol bergambar pensil pada kolom aksi pada tabel pelanggan di halaman utama.</li>
  <li>Pada halaman edit pelanggan, ubah data pelanggan dan klik tombol "Update Tagihan".</li>
  <li>Data pelanggan akan terupdate pada tabel di halaman utama.</li>
  <li>Untuk menghapus data pelanggan, klik tombol bergambar tong sampah pada kolom aksi pada tabel pelanggan di halaman utama.</li>
</ol>
<br>
<p>Demikianlah README.md untuk aplikasi Pembayaran Air menggunakan Laravel versi 9 dan MySQL. Semoga tutorial ini bisa membantu teman-teman yang ingin belajar bagaimana membuat CRUD sederhana dengan Laravel dan MySQL, serta bagaimana membuat API dan mengintegrasikannya dengan UI Bootstrap. Jangan ragu untuk mengembangkan aplikasi ini lebih jauh, menambahkan fitur baru, atau memperbaiki kode yang ada untuk meningkatkan performa dan fungsionalitasnya. Terima kasih telah membaca, semoga bermanfaat!</p>