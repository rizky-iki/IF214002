# TUGAS

Membuat DDL, DML, DQL sesuai proyek masing-masing

## DDL

```sql
CREATE TABLE `detail_pemesanan` (
  `id_detail_pem` varchar(12) NOT NULL,
  `id_pemesanan` varchar(12) NOT NULL,
  `jenis_ikan` varchar(22) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `id_ikan` varchar(12) NOT NULL,
  `id_produsen` varchar(12) NOT NULL
  );
  
  CREATE TABLE `ikan` (
  `id_ikan` varchar(12) NOT NULL,
  `harga_ikan` int(11) NOT NULL,
  `nama_ikan` varchar(50) NOT NULL,
  `jenis_ikan` enum('laut','tawar') NOT NULL
  );

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(12) NOT NULL,
  `kode_pembayaran` varchar(12) NOT NULL,
  `nama_pembayar` varchar(50) NOT NULL,
  `jenis_pembayaran` enum('transfer','cash') NOT NULL,
  `id_user` int(11) NOT NULL
  );
  
 CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(12) NOT NULL,
  `status` enum('transfer','cash') NOT NULL,
  `id_user` int(11) NOT NULL
  );
  
  CREATE TABLE `produsen` (
  `id_produsen` varchar(12) NOT NULL,
  `nama_produsen` varchar(50) NOT NULL,
  `jenis_produsen` varchar(50) NOT NULL,
  `stok_ikan` int(11) NOT NULL,
  `id_ikan` varchar(12) NOT NULL
  );
  
  CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(26) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `no_telepon` varchar(16) NOT NULL,
  `alamat` varchar(120) NOT NULL
  );
  
  
