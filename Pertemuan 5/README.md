# Aplikasi Pengelola Penjualan Dan Pembelian Ikan Berbasis Mobile
![ikan_skyy](https://user-images.githubusercontent.com/80630206/176457126-097af456-ab27-4d2f-a9d1-b31532348a95.png)
![ss digram](https://user-images.githubusercontent.com/80630206/159937545-33c4aec6-78c2-4c3d-bab7-61d8667d2fcc.jpeg)


## Changelog
View at [Homepage]
- ✨ `UPDATE` : Merapikan folder dari pertemuan  sebelumnya
  - Merapikan README.md untuk setiap pertemuan
  - Menambahkan changelog untuk setiap pertemuan
-`UPDATE` : Menambahkan deskripsi & fitur-fitur aplikasi
-`UPDATE` : Menambahkan keteragan pada entitas
-`CREATE` : Membuat pointer dari pertemuan 5

## Pointer
- Entity menjadi nama dari tabel
- Atribute menjadi nama kolom dari tabel
- Candidate key = satu atau lebih kolom unik yang akan dijadikan primary key
- Primary key = satu atau lebih kolom unik yang menjadi id atau penanda dari satu record / row data
- Composite key = kolom yang merupakan dua atau lebih primary key
- Query = sebuah cara atau bahasa untuk membuat, mendapatkan dan memanipulasi data
- DDL – Data Definition Language = membuat atau menghapus data/tabel
- DQl – Data Query Language = mengambil data
- DML – Data Manipulation Language = memanipulasi data
- DCL – Data Control Language = menentukan siapa yang dapat mengontrol data

## ERD Crow's Foot  Database
![img 404]

## Relationship
|Relationship| ERDish|
|------------|--------|
| user (1 , 1) ----- (0 , N) pemesanan | Each user *may* order *zero or more* pemesanan |
| pemesanan (1 , N) ----- (1 , 1) detail_pemesanan | Each pemesanan *must* have *one and only one* detail_pemesanan |
| pemesanan (1 , 1) ----- (0 , 1) pembayaran | Each pemesanan *may be* paid *zero or one* pembayaran |
| detail_pemesanan (0 , 1) ----- (1 , N) ikan | Each detail_pemesanan *must* have  *one or more* ikan ||
| ikan (1 , N) ----- (1 , 1) jenis_ikan | Each ikan *must* have *one and only one* jenis_ikan |
| jenis_jenis ikan (1 , N) ----- (1 , N) jenis ikan | Each jenis_ikan *must* have *one or more* jenis_ikan |

# Aplikasi Pengelola Penjualan Dan Pembelian Ikan Berbasis Mobile


![ikan_skyy](https://user-images.githubusercontent.com/80630206/176457126-097af456-ab27-4d2f-a9d1-b31532348a95.png)



# Deskripsi_Proyek
Aplikasi ini di buat untuk mempermudahkan para nelayang dan para membeli, dengn Fitur-Fitur sebagai berikut:
1. Melakukan pemesanan Ikan 
2. Melihat Setok ikan Yang tersedia
3. Mencatat riwayat pemesanan ikan
4. Melakukan pembayaran ikan 
5. Mencatat riwayat transaksi pembayaran Ikan

## Entitas dan Atribut

#### detail_pemesanan
1. id_detail_pem (PK)
2. id_pemesanan(FK)
3. jumlah
4. total_harga
5. id_ikan(FK)
6. id_produsen(FK)

#### ikan
1. id_ikan(PK)
2. nama_ikan
3. harga_ikan

#### pembayaran
1. id_pembayaran (PK)
2. kode_pembayaran
3. nama_pembayar
4. jenis_pembayaran
5. id_user(UNIQUE)

#### pemesanan
1. id_pemesanan(PK)
2. status
3. id_user(FK)

#### produsen
1. id_produsen(PK)
2. nama_produsen
3. jenis_produsen
4. stok_ikan
5. id_ikan(FK)

#### users
1. id_user(PK)
2. email(UNIQUE)
3. password
4. nama_lengkap
5. no_telepon
6. alamat
