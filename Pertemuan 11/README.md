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
  
  
