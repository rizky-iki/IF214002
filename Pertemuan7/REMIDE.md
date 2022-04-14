# Pemodelan Data Historis

# Quiz
 
 
## Pemanfaatan data historis
- data pemasukan penjualan 
  - tingkat jumlah pasien dirumah sakit
  - data kesehatan, kemiskinan ,dan jumlah penduduk.
  - presentase pendaftar ke SMA negri 
  - presentase nilai siswa
## Perubahan ERD untuk entitas yang memiliki data historis
contoh data historis terakhir dibaca di suatu aplikasi
## Tabel terakhir di baca
 



||Karyawan|
|---|---|
|PK|ID|
||Nama|
||Gaji Bulanan|
||Tanggal Mulai Gaji|


||Karyawan|
|---|---|
|PK|ID|
||Nama|

||Histori Gaji|
|---|---|
|PK|Tanggal Mulai Gaji|
|PK|ID Karyawan|
||Gaji Bulanan|

Dengan relasi 
|Karyawan|1:M|Histori Gaji|
|---|---|---|




