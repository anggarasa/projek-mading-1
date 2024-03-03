## Kelompok 2 Back End Smk Al-intisab Kelas XI RPL

<span>Anggota Kelompok</span>
<ul>
    <li>Anggara Saputra</li>
    <li>Reyhan</li>
    <li>Tobi</li>
</ul>

## Cara Menginstall Projek Ini
  <p>Pastikan di laptop/komputer anda sudah menginstal composer dan nodeJs kalau sudah ada silakan anda ikuti cara instalasi di bawah ini</p>
  Salin perintah dibawah ini
  <pre><code class="language-html">git clone https://github.com/anggarasa/projek-mading-1.git</code></pre>
  1. Jalankan perintah composer install di terminal/cmd
      <pre><code class="language-html">composer install</code></pre>
      <br><br>
  2. Jalankan perintah npm install
     <pre><code class="language-html">npm install</code></pre>
     <br><br>
  <p>3. Copy file .env.example dan paste lalu ubah namanya menjadi .env</p>
<br><br>
   4. untuk menghasilkan kunci enkripsi yang digunakan oleh berbagai komponen dalam aplikasi Laravel, terutama untuk enkripsi sesi dan cookies.
       <pre><code class="language-html">php artisan key:generate</code></pre>
<br><br>
   5. untuk mengoptimalkan performa aplikasi Laravel dengan menyimpan semua file konfigurasi dalam satu file cache.
       <pre><code class="language-html">php artisan config:cache</code></pre>
<br><br>
   6. Jangan lupa untuk migrate supaya database yang ada diprojek ini tersimpan database anda
   <pre><code class="language-html">php artisan migrate</code></pre>
   <br><br>
   7. Lalu ketikan perintah dibawah ini supaya data yang ada diprojek ini tersimpan di database anda
   <pre><code class="language-html">php artisan db:seed</code></pre>
   <br><br>
   8. Supaya folder storage terikat dengan folder public
   <pre><code class="language-html">php artisan storage:link</code></pre>
   <br><br>
   
   <h3>Setelah selesai menginstal silakan jalankan perintah ini kalau anda ingin melihat projek ini di web</h3>
   <pre><code class="language-html">npm run dev</code></pre>


## About 
 Kami membuat sebuah mading berbasis website khusus sekolah Al-intisab, jika anda ingin mencoba aplikasi ini di device anda silakan dibawah ini adalah akun-akun yang sudah di siapkan oleh kami:
 - Akun admin
       email: admin@gmail.com
       password: admin123
   <br>
 - Akun Khusus untuk Guru
       email: guru1@gmail.com
       password: guru123
   <br>
 - Akun Uji coba murid
       email: murid1@gmail.com
       password: murid123
