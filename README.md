 Dokumentasi Tema WordPress SilfiEdu
 1. Nama Tema
SilfiEdu – Tema Website Pendidikan
SilfiEdu merupakan tema WordPress yang dikembangkan untuk website bertema pendidikan. Tema ini dirancang dengan tampilan modern, sederhana, dan responsif agar pengunjung dapat membaca informasi serta artikel pendidikan dengan nyaman.
 2. Deskripsi Tema
SilfiEdu adalah tema WordPress yang dikembangkan secara mandiri menggunakan HTML, CSS, PHP, dan fitur bawaan WordPress. Tema ini bertujuan menyediakan tampilan website pendidikan yang informatif, mudah digunakan, dan mudah dikelola oleh administrator.
Website SilfiEdu dapat digunakan untuk menyampaikan berbagai informasi pendidikan, seperti wawasan pendidikan, perkembangan teknologi dalam pembelajaran, literasi digital, serta artikel yang berkaitan dengan dunia pendidikan.
Tema ini memanfaatkan sistem pengelolaan konten WordPress sehingga administrator dapat menambahkan, mengedit, menghapus, dan mengelompokkan artikel melalui Dashboard tanpa harus mengubah kode program setiap kali menerbitkan artikel baru.
 3. Fitur Tema
Tema WordPress SilfiEdu dirancang dengan beberapa fitur utama berikut.
 a. Halaman Beranda
Halaman beranda menjadi halaman utama website yang menampilkan pengenalan website dan artikel terbaru. Bagian ini membantu pengunjung mengenali tujuan website serta menemukan konten yang tersedia.
 b. Halaman Blog
Halaman blog menampilkan daftar artikel yang telah diterbitkan. Pengunjung dapat melihat judul, ringkasan, gambar unggulan, dan informasi artikel sesuai dengan tampilan yang diterapkan pada tema.
 c. Halaman Detail Artikel
Halaman detail artikel digunakan untuk menampilkan isi artikel secara lengkap. Halaman ini dapat mencakup judul, nama penulis, tanggal penerbitan, gambar unggulan, isi artikel, kategori, serta navigasi artikel sebelumnya dan berikutnya apabila tersedia pada implementasi tema.
d. Kategori Artikel
Kategori digunakan untuk mengelompokkan artikel berdasarkan topik, misalnya Pendidikan, Teknologi, dan Literasi Digital. Fitur ini membantu pengelolaan konten agar lebih terstruktur.
 e. Fitur Pencarian Artikel
Fitur pencarian memungkinkan pengunjung mencari artikel berdasarkan kata kunci. Fitur ini memanfaatkan mekanisme pencarian WordPress dan template pencarian pada tema jika telah diterapkan.
 f. Sidebar
Sidebar merupakan area tambahan yang dapat menampilkan informasi website, kategori, artikel terbaru, dan formulir pencarian. Konten sidebar dapat disesuaikan melalui kode tema atau pengaturan widget WordPress sesuai implementasinya.
 g. Menu Navigasi
Menu navigasi membantu pengunjung berpindah dari satu halaman ke halaman lainnya. Menu dapat diatur melalui Dashboard WordPress apabila lokasi menu telah didaftarkan dalam tema.
 h. Gambar Unggulan
Fitur gambar unggulan memungkinkan administrator menambahkan gambar utama pada artikel. Gambar dapat digunakan untuk memperjelas topik dan memperindah tampilan daftar maupun halaman detail artikel.
 i. Desain Responsif
Tema dirancang agar tata letak dapat menyesuaikan ukuran layar komputer, laptop, tablet, dan perangkat seluler melalui penggunaan CSS responsif.
 j. Pengelolaan Artikel melalui Dashboard
Administrator dapat membuat dan mengelola artikel melalui menu Pos pada WordPress. Dengan demikian, pengelolaan konten dapat dilakukan tanpa harus menulis ulang kode PHP untuk setiap artikel.
 4. Teknologi yang Digunakan
Pengembangan tema SilfiEdu menggunakan beberapa teknologi berikut.
 a. WordPress
WordPress digunakan sebagai sistem manajemen konten atau *Content Management System* (CMS). WordPress menyediakan Dashboard untuk mengelola artikel, halaman, kategori, menu, dan berbagai pengaturan website.
 b. HTML
HTML digunakan untuk menyusun struktur halaman website, seperti bagian header, navigasi, konten utama, sidebar, dan footer.
 c. CSS
CSS digunakan untuk mengatur tampilan visual website, meliputi warna, tipografi, jarak antarelemen, tata letak, tombol, gambar, dan desain responsif.
 d. PHP
PHP digunakan untuk membangun template tema dan menghubungkan tampilan dengan data WordPress. PHP juga digunakan untuk menampilkan artikel secara dinamis melalui fitur seperti The Loop dan WP_Query.
 e. MySQL/MariaDB
MySQL atau MariaDB digunakan oleh instalasi WordPress untuk menyimpan data website, termasuk artikel, kategori, akun pengguna, dan pengaturan. Pada lingkungan XAMPP, layanan database ini digunakan untuk menjalankan WordPress secara lokal.
f. XAMPP
XAMPP digunakan sebagai lingkungan server lokal yang menyediakan Apache dan MySQL/MariaDB agar website WordPress dapat dijalankan dan diuji di komputer sendiri tanpa harus langsung dipublikasikan ke internet.
 g. Git dan GitHub
Git digunakan untuk mencatat perubahan kode selama proses pengembangan, sedangkan GitHub digunakan untuk menyimpan repositori proyek, mendokumentasikan kode, dan membagikan hasil pekerjaan.
5. Struktur File Tema

Tema SilfiEdu memiliki struktur file yang digunakan untuk mengatur tampilan website.

 style.css  Menyimpan identitas tema dan aturan desain CSS. 
 functions.php Mendaftarkan fitur tema, menu, gambar unggulan, sidebar, dan stylesheet. 
header.php Menampilkan bagian kepala website dan navigasi. 
 footer.php  Menampilkan bagian bawah website. 
 front-page.php  Mengatur tampilan halaman beranda jika digunakan sebagai template halaman depan. 
 home.php  Mengatur tampilan halaman daftar artikel blog. 
 single.php  Menampilkan detail satu artikel. 
 archive.php  Menampilkan daftar artikel berdasarkan arsip atau kategori yang sesuai. 
index.php  Menjadi template utama cadangan WordPress. 
 sidebar.php  Mengatur tampilan sidebar. 
 searchform.php  Menyediakan formulir pencarian artikel. 
 README.md  Berisi dokumentasi proyek dan petunjuk penggunaan. 

 6. Petunjuk Instalasi

Berikut langkah-langkah untuk memasang dan menjalankan tema SilfiEdu di WordPress menggunakan XAMPP.

 A. Persiapan

1. Instal XAMPP dan WordPress di komputer.
2. Jalankan Apache dan MySQL/MariaDB melalui XAMPP Control Panel.
3. Pastikan WordPress dapat diakses melalui browser, misalnya `http://localhost/wordpress`.
4. Siapkan folder tema SilfiEdu yang berisi file-file tema.

B. Memasang Tema

1. Buka folder instalasi WordPress.
2. Masuk ke direktori `wp-content/themes/`.
3. Salin folder `silfiedu` ke dalam direktori tersebut.
4. Pastikan file utama `style.css` berada langsung di dalam folder `silfiedu`, bukan di dalam folder bertingkat lainnya.
5. Buka Dashboard WordPress melalui `http://localhost/wordpress/wp-admin`.
6. Masuk menggunakan akun administrator.
7. Pilih menu Tampilan → Tema (Appearance → Themes).
8. Cari tema SilfiEdu, kemudian klik **Aktifkan (Activate).

C. Mengatur Website

1. Buat halaman Beranda melalui menu Laman → Tambah Laman Baru.
2. Buat halaman Blog untuk menampilkan daftar artikel.
3. Buka Pengaturan → Membaca (Settings → Reading).
4. Jika ingin menggunakan halaman statis, pilih Beranda sebagai halaman depan dan Blog sebagai halaman pos.
5. Atur menu navigasi melalui Tampilan → Menu atau pengaturan navigasi yang tersedia pada versi WordPress yang digunakan.
6. Buat kategori artikel sesuai kebutuhan.
7. Tambahkan artikel melalui menu Pos → Tambah Pos Baru.
8. Tambahkan gambar unggulan, isi artikel, lalu klik Terbitkan.
9. Buka halaman website dan periksa tampilan beranda, blog, detail artikel, dan pencarian.

 D. Pengujian

Setelah instalasi, lakukan pengujian untuk memastikan tema berjalan dengan baik:

- Tema SilfiEdu dapat diaktifkan tanpa pesan kesalahan.
- Halaman beranda dapat dibuka.
- Artikel yang diterbitkan dapat muncul pada daftar blog.
- Judul artikel dapat dibuka menuju halaman detail.
- Gambar unggulan ditampilkan jika telah ditambahkan dan didukung template.
- Pencarian artikel berfungsi jika template pencarian telah disiapkan.
- Tampilan website dapat menyesuaikan ukuran layar yang berbeda.


