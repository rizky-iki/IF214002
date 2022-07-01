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
