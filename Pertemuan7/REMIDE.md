# Pemodelan Data Historis
# Quiz
#Soal
- Berikan contoh pemanfaatan data historis
- Rancang ERD untuk penyimpanan data karyawan dari sebuah perusahaan, lengkap dengan data historis gaji, data historis tempat tinggal, dan data historis jabatan. Selanjutnya, implementasikan ERD tersebut pada basis data relasional (MySQL / PostgreSQL / SQL Server / dll) menggunakan perintah 

#Jawab
- contoh pemanfaatan data historis
  - data pemasukan penjualan 
  - tingkat jumlah pasien dirumah sakit
  - data kesehatan, kemiskinan ,dan jumlah penduduk.
  - presentase pendaftar ke SMA negri 
  - presentase nilai siswa
  - kasus korupsi dari tahun ketahun
  - lagu terpopuler 



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




