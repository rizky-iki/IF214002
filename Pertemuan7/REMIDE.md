# Pemodelan Data Historis

# Quiz
 
 
## Pemanfaatan data historis
  - untuk membantu menganalisis/mencari data
  - untuk membantu mengelompokann data
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
||Alamat|
||Jabatan|
||Gaji Bulanan|
||Tanggal Mulai Gaji|




CREATE TABLE

databasekaryawan_ tbl(
   karyawan_id INT NOT NULL AUTO_INCREMENT,
   nama_karyawan VARCHAR(100) NOT NULL,
   gaji bulanan INT NOT NULL,
   tanggal_mulai_gaji_DATETIME,
   alamat VARCHAR(100)
   Jabatan CHAR(20)
   PRIMARY KEY ( karyawan_id )
);
datahistorigaji_ tbl(
   karyawan_id INT NOT NULL AUTO_INCREMENT,
   gaji bulanan INT NOT NULL,
   tanggal_mulai_gaji_DATETIME,
   PRIMARY KEY ( tanggal_mulai_gaji )
);
datahistorialamat_ tbl(
   karyawan_id INT NOT NULL AUTO_INCREMENT,
   alamat VARCHAR(100),
   PRIMARY KEY (  tanggal_masuk )
);
datahistorijabatan_ tbl(
   karyawan_id INT NOT NULL AUTO_INCREMENT,
   tanggal_masuk_date DATETIME,
   Jabatan CHAR(20)
   PRIMARY KEY (  tanggal_masuk )
);

```python
print("Quiz Pertemuan 7")



