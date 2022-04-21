# UTS

# soal
1. Basis data relasional dapat langsung dibangun menggunakan perintah SQL di sistem basis data seperti MySQL, dsb tanpa ada perancangan terlebih dahulu. Jelaskan apa keuntungan melakukan perancangan basis data terlebih dahulu (menggunakan ERD ataupun Class Diagram) !
2. Jelaskan bagaimana cara mentransformasikan proses bisnis sebuah organisasi menjadi struktur data di basis data !
3. Rancang solusi digital dari satu permasalahan yang ada di sekitar Anda. 
 - Deskripsikan solusi digital tersebut dalam satu paragraf
 - Buat list fitur-fitur yang ada pada solusi digital tersebut
 - Buat ERD notasi Chen dari struktur data yang mewakili fitur2 di solusi digital tersebut
 - Buat ERD notasi Crow Foot dari struktur data logical yang mewakili fitur2 di solusi digital tersebut, lengkap dengan keys, tipe data, dan normalisasi hingga bentuk ke 3

# Jawaban

1. ERD adalah model atau rancangan untuk membuat database, supaya lebih mudah dalam menggambarkan data yang memiliki hubungan atau relasi dalam bentuk sebuah desain. Dengan adanya ER diagram, maka sistem database yang terbentuk dapat digambarkan dengan lebih terstruktur dan terlihat rapi. Untuk menyusun sistem database yang tepat, maka kita harus menentukan terlebih dahulu mengenai jenis model data yang akan digunakan. Yang mana, hal tersebut akan sangat berpengaruh nantinya pada pengembangan aplikasi sesuai dengan kebutuhan proyek bisnis. Model ER konseptual sangat berguna untuk mendokumentasikan segala bentuk arsitektur data pada sebuah organisasi. Model ini dapat digunakan untuk satu atau lebih jenis model data logis. Tujuan dari pengembangannya adalah untuk membangun struktur metadata untuk data master entitas dan set ER model logis.

  A. Data Logis
  Jenis yang pertama adalah model data logis, dimana untuk proses pembuatannya tidak membutuhkan model data konseptual. Komponen dalam model data logis antara lain, entitas data master, operasional, dan transaksional yang telah terdefinisi sebelumnya. Model ini juga dapat dikembangkan secara independen mulai dari yang lebih spesifik, hingga sistem manajemen basis data yang dapat diimplementasikan langsung.

  B. Data Fisik
  Model data fisik memungkinkan untuk dikembangkan dari model data logis. Model ini yang digunakan sebagai database. Model data fisik dipakai dalam menentukan metadata struktural dalam sistem manajemen database sebagai objek penyimpanan data yang bersifat relasional, contohnya tabel, indeks dan trigger pada database.
 

# Deskripsikan solusi digital tersebut dalam satu paragraf
 Bermula dari permasalahan pribadi keinginan untuk membeli ikan, siput dan dll, namun hal tersebut terkendala karena adanya pembeli yang langsung dari restoran membeli semua hasil nelayan sehingga warga dan dan rakyat di sekitar tidak kebagian, hal tersebut membuat saya memiliki ide untuk membuat ikan segar kuyyy, ikan segar kuy adalah gudang hasil tangkapan nelayan yang di mana bisa mencukupi permintaan dari warga dan restoran

# Buat list fitur-fitur yang ada pada solusi digital tersebut 
 - User Memesan ikan
 - User bisa mencari berbagai menu ikan pada menu search 
 - User bisa menambahkan pemesanan 

# Buat ERD notasi Crow Foot dari struktur data logical yang mewakili fitur2 di solusi digital tersebut, lengkap dengan keys, tipe data, dan normalisasi hingga bentuk ke 3
![ss digram](https://user-images.githubusercontent.com/80630206/159937545-33c4aec6-78c2-4c3d-bab7-61d8667d2fcc.jpeg)
![DIGRAM BLOK](https://user-images.githubusercontent.com/80630206/162011092-ab3d2073-8552-4950-ae05-e9dacd50d684.jpeg)



# Tabel Normalisasi

#### Tabel Admin
|🔑id_admin|pass_admin|Email_admin|
|---|---|---|
|1|5320331|123cobaan|muhammadsantoso134@gmail.com|
|2|7629576|jalanwetan|iki45@gmail.com|

#### Tabel user
|🔑id_user|nama_lengkap|alamat|no_telepon|email|password|
|---|---|---|---|---|---|
|1|98765322|iman balok|banyusari|083426276367|iman123@gmail.com|456789|
|2|96789568|sandi|malausma|098765875667|sandi031@gmail.com|786457|
|3|79869006|iwan|bantarujeg|087588576347|iwan678@gmail.com|876413|

#### Tabel Pemesanan
|🔑id_pemesanan|id_user|id_pembayaran|tanggal|status|total_harga|
|---|---|---|---|---|---|
|1|67888|98765322|6782|12 januari 2022|150.000|
|2|56788|96789568|5678|3 mei 2022|1000.000|
|3|45674|79869006|2461|6 juli 2022|68.000|

#### Tabel nelayan
|🔑id_nelayan|nama_nelayan|jenis_kelamin|jenis_ikan|
|---|---|---|---|
|1|567|ucup|laki-laki|paus|
|2|777|ma ijah|perempuan|hiu buru|
|3|786|jajang|laki-laki|bandeng|


#### Tabel gudang
|🔑id_ikan|nama|jenis_ikan|stok ikan|
|---|---|---|---|
|1|678|paus|laut|78|
|2|888|hiu biru|laut|245|
|3|789|bandeng|tawar|2000|
