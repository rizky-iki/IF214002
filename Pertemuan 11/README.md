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
  
  
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`id_detail_pem`),
  ADD UNIQUE KEY `id_pemesanan` (`id_pemesanan`),
  ADD UNIQUE KEY `id_ikan` (`id_ikan`),
  ADD UNIQUE KEY `id_produsen` (`id_produsen`);
  
  
ALTER TABLE `ikan`
  ADD PRIMARY KEY (`id_ikan`);
  
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD UNIQUE KEY `id_user` (`id_user`);
  
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD UNIQUE KEY `id_user` (`id_user`);
  
ALTER TABLE `produsen`
  ADD PRIMARY KEY (`id_produsen`),
  ADD UNIQUE KEY `id_ikan` (`id_ikan`);
  
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
  
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `detail_pemesanan_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`),
  ADD CONSTRAINT `detail_pemesanan_ibfk_2` FOREIGN KEY (`id_ikan`) REFERENCES `ikan` (`id_ikan`),
  ADD CONSTRAINT `detail_pemesanan_ibfk_3` FOREIGN KEY (`id_produsen`) REFERENCES `produsen` (`id_produsen`);
  
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
  
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
  
ALTER TABLE `produsen`
  ADD CONSTRAINT `produsen_ibfk_1` FOREIGN KEY (`id_ikan`) REFERENCES `ikan` (`id_ikan`);
COMMIT;

