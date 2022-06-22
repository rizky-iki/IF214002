# Aplikasi Pengelola Penjualan Dan Pembelian Ikan Berbasis Mobile


![DIGRAM BLOK](https://user-images.githubusercontent.com/80630206/162011383-ac8f8e49-e466-4d67-b0b2-c724faf5755b.jpeg)
![WhatsApp Image 2022-06-14 at 16 55 30](https://user-images.githubusercontent.com/80630206/175078264-de43c9ad-29d4-49b2-9447-2d7095a83be8.jpeg)


## Deskripsi
Aplikasi pembelian ikan segar kuyy adalah sebuah aplikasi yang dirancang untuk memenuhi kebutuhan masyarakat dan restoran yang akan memesanan ikan masuk agar bisa mencukupi kebutuhan masyarakat dan restoran hususnya masyarakat, efektif, dan efisien. saat ketersediaan ikan mulai berkurang, pembelian dan pemesanan ikan dengan cara konvensional menjadi tidak efisien dan efektif karena banyaknya restoran yang langsung membeli ke nelayan sehingga masyarakat tidak dapat kebagian. Dengan demikian, penyelesaian permasalahan ini adalah bagaimana sistem yang baru dapat mengganti sistem yang lama agar tercipta efisiensi biaya.

## Fitur-fitur
- Melakukan pembelian ikan
- Menampilkan harga ikan dan stok ikan yangtersedia
- Mencatat dan menampilkan rincian riwayat pemesanan ikan yang dibeli seperti waktu masuk, jumlah ikan.
- Melakukan pembayaran ikan dan mencatat riwayat transaksi pembayaran ikan.
- Menampilkan jumlah ikan yang terjual dan hasil penjualan ikan kemudian direkap setiap akhir bulan.


# Deskripsi_Proyek
Aplikasi ini di buat untuk mempermudahkan para nelayang dan para membeli, dengn Fitur-Fitur sebagai berikut:
1. Melakukan pemesanan Ikan 
2. Melihat Setok ikan Yang tersedia
3. Mencatat riwayat pemesanan ikan
4. Melakukan pembayaran ikan 
5. Mencatat riwayat transaksi pembayaran Ikan




##USER 

1. id_user_INT NOY NULL
2. email CHAR(50) NOT NULL
3. password CHAR (256) NOT NUL
4. nama_ lengkap CHAR(50)
5. no_telepon.CHAR(50).
6. alamat CHAR(253)

 Pemesanan
1. id_pembayaran INT NOT NULL
2. status enum
3. id_user

Detail pemesanan
1. id_detail_pem INT NOT NULL
2. id_pemesanan INT NOT NULL
3. id_ikan INT NOT NULL
4. jenis ikan INT NOT NULL
5. jumlah INT
6. tota__harga INT
7. id_produsen varchar


Pembayaran
1. id_pembayaran INT NOT NULL
2. kode_pembayaran CHAR(24) NOT NULL 
3. nama_pembayar CHAR(24) NOT NULL
4. jenis_pembayaran CHAR(24) NOT NULL
5. id_user

ikan
1. id_ikan INT NOT NULL
2. harga_ikan INT NOT NULL
3. nama_ikan INT NOt NULI
4. jenis_ikan


produsen
1. id_produsen CHAR(12) NOT NULL
2. nama_produsen CHAR(50) NOT NULL
3. jenis_produsen CHAR(50) NOT NULL
4. stok_ikan INT
5. id_ikan CHAR(12) NOT NULL


