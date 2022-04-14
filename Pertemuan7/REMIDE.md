# Pemodelan Data Historis
# Quiz


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


  
  ||Jadwal Pertandingan|
  |---|---|
  |PK|ID|
  ||Home|
  ||Away|
  ||Tanggal|
  ||Stadion|
  

  ||Pembelian Tiket|
    |---|---|
    |PK|ID|
    ||Kuantitas|
    ||Harga Tiket|
    ||Tanggal|
    ||Kelembaban|
    ||Temperatur|

