# Ide Solusi: pembelian ikan 

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
| user (1 , 1) ----- (0 , N) pemesanan | Each user **may** order **zero or more** pemesanan |
| pemesanan (1 , N) ----- (1 , 1) detail_pemesanan | Each pemesanan **must** have **one and only one** detail_pemesanan |
| pemesanan (1 , 1) ----- (0 , 1) pembayaran | Each pemesanan **may be** paid **zero or one** pembayaran |
| detail_pemesanan (0 , 1) ----- (1 , N) ikan | Each detail_pemesanan **must** have  **one or more** ikan ||
| ikan (1 , N) ----- (1 , 1) jenis_tiket | Each ikan **must** have **one and only one** jenis_ikan |
| jenis_jenis ikan (1 , N) ----- (1 , N) objek_wisata | Each jenis_ikan **must** have **one or more** jenis_ikan |

## Deskripsi
Aplikasi pembelian ikan segar kuyy adalah sebuah aplikasi yang dirancang untuk memenuhi kebutuhan masyarakat dan restoran yang akan memesanan ikan masuk agar bisa mencukupi kebutuhan masyarakat dan restoran hususnya masyarakat, efektif, dan efisien. saat ketersediaan ikan mulai berkurang, pembelian dan pemesanan ikan dengan cara konvensional menjadi tidak efisien dan efektif karena banyaknya restoran yang langsung membeli ke nelayan sehingga masyarakat tidak dapat kebagian. Dengan demikian, penyelesaian permasalahan ini adalah bagaimana sistem yang baru dapat mengganti sistem yang lama agar tercipta efisiensi biaya.

## Fitur-fitur
- Melakukan pembelian ikan
- Menampilkan harga ikan dan stok ikan yangtersedia
- Mencatat dan menampilkan rincian riwayat pemesanan ikan yang dibeli seperti waktu masuk, jumlah ikan.
- Melakukan pembayaran ikan dan mencatat riwayat transaksi pembayaran ikan.
- Menampilkan jumlah ikan yang terjual dan hasil penjualan ikan kemudian direkap setiap akhir bulan.


## Entitas dan Atribut

_Note:_  
_\* primary key_  
_\** composite key_

### user (pemesan)
- \* id_user
- \** email
- password
- nama_lengkap
- no_telepon
- alamat


### pemesanan
- \* id_pemesanan
- (fk) id_user
- (fk) id_pembayaran
- tanggal
- status
- total_harga

### detail_pemesanan
- \* id_detail_pemesanan
- (fk) id_ikan
- (fk) id_pemesanan
- jumlah
- total_harga

### pembayaran
- \* id_pembayaran
- \** kode_pembayaran
- nama_pembayaran
- jenis_pembayaran

### ikan
- \* id_ikan
- (fk) id_jenis_ikan
- harga

### jenis_ikan
- \* id_jenis_ikan
- (fk) id_
- nama




