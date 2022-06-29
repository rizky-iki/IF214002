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
INSERT INTO public.users (id_user,email,"password",nama_lengkap,no_telepon,alamat) VALUES
	 ('456122','iki34@gmail.com','123ikan','udin','089746346463','jl.kampung seni, blok B, komplek BCI, kec.cilenyi, kab.bandung'),
	 ('567352','udin345@gmail.com','katakanudin','ikbal','089655762344','jl.kampung seni, blok B, komplek BCI, kec.cilenyi, kab.bandung');
INSERT INTO public.produsen (id_produsen,nama_produsen,jenis_produsen,stok_ikan,id_ikan) VALUES
	 ('112233','ikiii','prusahaan',1234,'b123f'),
	 ('123456','udin','perseorangan',1235,'c234t'),
	 ('1','nurkholis','perorangan',3000,'1'),
	 ('2','rijki','perorangan',5000,'2'),
	 ('3','jeki','perorangan',6000,'3'),
	 ('4','ehan','perorangan',7000,'4'),
	 ('5','oman','restoran',4000,'5'),
	 ('6','si bos','restoran',1000,'6'),
	 ('7','nugraha','restoran',2000,'7'),
	 ('8','norma','restoran',3000,'8');
INSERT INTO public.produsen (id_produsen,nama_produsen,jenis_produsen,stok_ikan,id_ikan) VALUES
	 ('9','rijal','restoran',4000,'9'),
	 ('10','rizzik','restoran',4000,'10'),
	 ('11','salman','perorangan',4000,'11'),
	 ('12','rama','perorangan',4000,'12'),
	 ('13','siti','perorangan',4000,'13'),
	 ('14','juve','perorangan',6000,'14'),
	 ('15','kamui','restoran',6000,'15'),
	 ('16','samui','restoran',6000,'16');
INSERT INTO public.pemesanan (id_pemesanan,status,id_user) VALUES
	 ('r365u','lunas','567352'),
	 ('t456y','belum lunas','456122'),
	 ('1','lunas','1'),
	 ('2','lunas','2'),
	 ('3','lunas','2'),
	 ('4','belum lunas','2'),
	 ('5','belum lunas','3'),
	 ('6','belum lunas','4'),
	 ('7','belum lunas','5'),
	 ('8','belum lunas','6');
INSERT INTO public.pemesanan (id_pemesanan,status,id_user) VALUES
	 ('9','belum lunas','7'),
	 ('10','belum lunas','8'),
	 ('11','belum lunas','9'),
	 ('12','belum lunas','10'),
	 ('13','lunas','10'),
	 ('14','lunas','10'),
	 ('15','belum lunas','10'),
	 ('16','lunas','11');
INSERT INTO public.pembayaran (id_pembayaran,kode_pembayaran,nama_pembayar,"jenis_pembayaran",id_user) VALUES
	 ('1','1','udin','cash','456122');
INSERT INTO public.ikan (id_ikan,harga_ikan,nama_ikan) VALUES
	 ('1',10000,'koi'),
	 ('2',10000,'ikan koi'),
	 ('3',10000,'ikan bandeng'),
	 ('4',20000,'ikan lele'),
	 ('5',30000,'ikan mas'),
	 ('6',50000,'ikan paus'),
	 ('7',40000,'ikan gurame'),
	 ('8',40000,'ikan jaer'),
	 ('9',40000,'ikan sepat'),
	 ('10',40000,'ikan benter');
INSERT INTO public.ikan (id_ikan,harga_ikan,nama_ikan) VALUES
	 ('11',40000,'ikan cingok'),
	 ('12',40000,'ikan gabus'),
	 ('13',30000,'ikan hiu'),
	 ('14',60000,'ikan bawal'),
	 ('15',60000,'ikan tenggiri'),
	 ('16',60000,'ikan salmon');
INSERT INTO public.detail_pemesanan (id_detail_pem,id_pemesanan,jumlah,total_harga,id_ikan,id_produsen) VALUES
	 ('1','1',1000,10000,'1','1'),
	 ('2','2',1000,20000,'2','2'),
	 ('3','3',2000,10000,'3','3'),
	 ('4','4',3000,30000,'4','4'),
	 ('5','5',2000,10000,'5','5'),
	 ('6','6',2000,10000,'6','6'),
	 ('7','7',1000,30000,'7','7'),
	 ('8','8',1000,20000,'8','8'),
	 ('9','9',6000,30000,'9','9'),
	 ('10','10',7000,40000,'10','10');
INSERT INTO public.detail_pemesanan (id_detail_pem,id_pemesanan,jumlah,total_harga,id_ikan,id_produsen) VALUES
	 ('11','11',5000,80000,'11','11'),
	 ('12','12',3000,60000,'12','12'),
	 ('13','13',2000,70000,'13','13'),
	 ('14','14',8000,30000,'14','14'),
	 ('15','15',8000,90000,'15','15'),
	 ('16','16',3000,90000,'16','16');


 ```

## DQL

``` sql
SELECT ikan.nama_ikan, ikan.harga_ikan, produsen.stok_ikan from ikan inner join produsen on ikan.id_ikan = produsen.id_ikan order by ikan.nama_ikan;



```
