# 1. Jelaskan contoh-contoh perintah SQL beserta kegunannya !

## 1.1. Perintah SELECT
### Perintah SELECT merupakan perintah dasar SQL yang di gunakan untuk memilih data dari database. Data yang di kembalikan di simpan dalam tabel yang di sebut result-set.

### Sintaks
|SELECT kolom1, kolom2, ... FROM nama_tabel;|
|---|
### atau
|SELECT * FROM nama_tabel;|
|---|
### Contoh
||SELECT nis, nama, alamat FROM siswa;|
|---|---|
### atau
||SELECT * FROM siswa;|
|---|---|
### Perintah pertama di atas di gunakan untuk menyeleksi kolom NIS, NAMA, dan ALAMAT dari tabel SISWA. sedangkan perintah kedua di gunakan untuk menyeleksi semua kolim dari tabel SISWA.

## 1.2. Perintah SELECT DISTINCT
### Perintah SELECT DISTINCT merupakan perintah dasar SQL yang di gunakan untuk mengembalikan hanya nilai yang berbeda dari dalam sebuah tabel, dengan kata lain semua record duplikat (record dengan nilai yang sama) yang terdapat pada tabel akan di anggap sebagai satu record/nilai.

### Sintaks
||SELECT DISTINCT kolom1, kolom2, ... FROM nama_tabel;|
|---|---|
### Contoh
||SELECT DISTINCT alamat FROM siswa;|
|---|---|
### Perintah di atas di gunakan untuk menampilkan kolom ALAMAT dari tabel SISWA dengan mengabaikan nilai yang duplikat, misalnya terdapat 10 siswa dengan alamat ‘Jakarta’, 15 siswa dengan alamat ‘Bandung’, 20 siswa dengan alamat ‘Depok’, dan seterusnya, result-set hanya menampilkan daftar alamat di antaranya ‘Jakarta’, ‘Bandung’, dan ‘Depok’ masing-masing 1 record.

## 1.3. Perintah WHERE
### Perintah WHERE merupakan perintah dasar SQL yang di gunakan untuk mem-filter hasil SELECT dengan mengekstrak record yang memenuhi persyaratan tertentu.

### Sintaks
||SELECT kolom1, kolom2, ... FROM nama_tabel WHERE kondisi;|
|---|---|
### Sintaks
||SELECT nis, nama FROM siswa WHERE alamat='jakarta';|
|---|---|
### Perintah di atas di gunakan untuk mengekstraksi data (NIS dan NAMA) dari tabel SISWA dengan kondisi “field ALAMAT berisi nilai JAKARTA”. Perintah di atas menggunakan operator sama dengan (‘=’), untuk operator lain yang di dukung perintah WHERE, lihat list di bawah ini.
- =  Sama dengan
- <> Tidak sama dengan, pada beberapa versi SQL, operator yang di gunakan adalah !=
- > Lebih besar dari
- < Lebih kecil dari
- >= Lebih besar sama dengan
- <= Lebih kecil sama dengan
- BETWEEN Antara rentang inklusif
- LIKE Cari pola yang ‘seperti’ parameter
- IN Menentukan kemungkinan nilai dari beberapa kolom

## 1.4. Perintah (operator) AND, OR dan NOT
### Operator AND, OR dan NOT merupakan perintah dasar SQL yang biasanya di kombinasikan dengan perintah WHERE. Ketiganya di gunakan untuk mem-filter record berdasarkan suatu kondisi, operator AND akan menampilkan record apabila semua kondisi bernilai TRUE, operator OR akan menampilkan record apabila salah satu kondisi bernilai TRUE, sedangkan operator NOT akan menampilkan record apabila semua kondisi bernilai FALSE.

### Sintaks AND
||SELECT kolom1, kolom2, ... FROM nama_tabel WHERE kondisi1 AND kondisi2 AND kondisi3 ...;|
|---|---|
### Contoh AND
||SELECT nis, nama FROM siswa WHERE alamat='Jakarta' AND tahun_lahir='2000'|
|---|---|
### Perintah di atas akan menampilkan record NIS dan NAMA dari tabel SISWA dengan ALAMAT di JAKARTA dan TAHUN_LAHIR “2000”, artinya record siswa yang lahir di tahun “2000” namun tidak beralamat di “Jakarta: atau siswa yang beralamat di “Jakarta” namaun lahir bukan pada tahun “2000” tidak akan di tampilkan.

### Sintaks OR
||SELECT kolom1, kolom2, ... FROM nama_tabel WHERE kondisi1 OR kondisi2 OR kondisi3 ...;|
|---|---|
### Contoh OR
||SELECT nis, nama FROM siswa WHERE alamat='Jakarta' OR alamat='Bandung'|
|---|---|
### Perintah di atas akan menampilkan record NIS dan NAMA dari tabel SISWA dengan ALAMAT di “JAKARTA” atau di “Bandung”, artinya record siswa yang beralamat di “Jakarta” dan di “Bandung” saja yang akan di tampilkan.

### Sintaks NOT
||SELECT kolom1, kolom2, ... FROM nama_tabel WHERE NOT kondisi;|
|---|---|
### Contoh NOT
||SELECT nis, nama FROM siswa WHERE NOT alamat='Jakarta'|
|---|---|
### Perintah di atas akan menampilkan semua record NIS dan NAMA dari tabel SISWA kecuali record siswa yang beralamat di ‘Jakarta’.

## 1.5. Perintah ORDER BY
### Perintah ORDER BY merupakan perintah dasar SQL yang di gunakan untuk mengurutkan result-set dalam pengurutan ‘ascending’ atau ‘descending’. Secara default perintah ORDER BY menampilkan record dalam pengurutan ‘ascending’ (‘ASC’). Untuk mengurutkan ‘descending’, gunakan kata kunci ‘DESC’.

### Sintaks
||SELECT kolom1, kolom2, ... FROM nama_tabel ORDER BY column DESC;|
|---|---|
### Contoh
||SELECT nis, nama FROM siswa ORDER BY tahun_lahir DESC;|
|---|---|
### Perintah di atas akan menampilkan result-set berupa field NIS dan NAMA dari tabel SISWA dengan di urutkan berdasarkan TAHUN_LAHIR secara descending, artinya tahun lahir akan di tampilkan mulai dari yang terbesar (siswa termuda) hingga terkecil (siswa termuda).

