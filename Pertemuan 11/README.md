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


  ```
 
## DML

``` sql

INSERT INTO `detail_pemesanan` (`id_detail_pem`, `id_pemesanan`, `jenis_ikan`, `jumlah`, `total_harga`, `id_ikan`, `id_produsen`) VALUES
('f112t', 't456y', 'tawar', 11, 56000, 'b123f', '112233');

INSERT INTO `ikan` (`id_ikan`, `harga_ikan`, `nama_ikan`, `jenis_ikan`) VALUES
('b123f', 12000, 'bandeng', 'laut'),
('c234t', 7000, 'mujair', 'tawar');

INSERT INTO `pembayaran` (`id_pembayaran`, `kode_pembayaran`, `nama_pembayar`, `jenis_pembayaran`, `id_user`) VALUES
('123456', '223344', 'udin', 'cash', 567352),
('76543', '23456', 'iki', 'transfer', 456122);

INSERT INTO `pemesanan` (`id_pemesanan`, `status`, `id_user`) VALUES
('r365u', 'cash', 567352),
('t456y', 'transfer', 456122);

INSERT INTO `produsen` (`id_produsen`, `nama_produsen`, `jenis_produsen`, `stok_ikan`, `id_ikan`) VALUES
('112233', 'ikiii', 'prusahaan', 1234, 'b123f'),
('123456', 'udin', 'perseorangan', 1235, 'c234t');

INSERT INTO `user` (`id_user`, `email`, `password`, `nama_lengkap`, `no_telepon`, `alamat`) VALUES
(456122, 'iki34@gmail.com', '123ikan', 'udin', '089746346463', 'jl.kampung seni, blok B, komplek BCI, kec.cilenyi, kab.bandung'),
(567352, 'udin345@gmail.com', 'katakanudin', 'ikbal', '089655762344', 'jl.kampung seni, blok B, komplek BCI, kec.cilenyi, kab.bandung');

 ```

## DQL

``` sql

/* menampilkan data pada tabel warga*/

SELECT * FROM `warga`;

/* menampilkan jumlah role atau jabatan yang ada pada seluruh sistem database */

SELECT COUNT(*) AS jumlah_role FROM `role`;

/* menampilkan warga berusia dibawah 25 tahun untuk seleksi karang taruna */

SELECT `nama_warga`, `nik_warga`, `tanggal_lahir`, `status_keaktifan`, TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) AS usia_warga, 
CASE 
	WHEN TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) < 25 THEN 'Remaja'
	WHEN TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) < 50 AND TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) > 24 THEN 'Dewasa'
	WHEN TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) > 50 THEN 'Lansia'
END AS kategori_usia
FROM `warga`
ORDER BY usia_warga ASC;

/* menampilkan detail dari lokasi seluruh data kk dengan join */

SELECT `id_kk`, `jumlah_anggota_keluarga`, `nama_rt`, `nama_rw`, `nama_keldes`, `nama_kecamatan`, `nama_kota`, `nama_provinsi` 
FROM `kk`
JOIN `rt` ON `kk`.`id_rt` = `rt`.`id_rt` 
JOIN `rw` ON `kk`.`id_rw` = `rw`.`id_rw`
JOIN `keldes` ON `kk`.`id_keldes` = `keldes`.`id_keldes`
JOIN `kecamatan` ON `kk`.`id_kecamatan` = `kecamatan`.`id_kecamatan`
JOIN `kota` ON `kk`.`id_kota` = `kota`.`id_kota`;

```
