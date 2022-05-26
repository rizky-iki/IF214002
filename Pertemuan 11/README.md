```sql
CREATE TABLE user (
  id_user int(8) NOT NULL,
  email varchar(50) NOT NULL,
  password varchar(256) NOT NULL,
  is_admin int(2) NOT NULL,
  nama_lengkap varchar(50) NOT NULL,
  no_telp varchar(24) NOT NULL,
  alamat varchar(256) NOT NULL,
);

CREATE TABLE pemesanan (
  id_pemesanan int(8) NOT NULL,
  id_user int(8) NOT NULL,
  id_pembayaran int(8) NOT NULL,
  status enum('pending','complete','cancelled','') NOT NULL,
  total_harga int(8) NOT NULL
);

CREATE TABLE detail_pemesanan (
  id_detail_pem int(8) NOT NULL,
  id_pemesanan int(8) NOT NULL,
  id_ikan int(8) NOT NULL,
  jenis_ikan int(16) NOT NULL,
  jumlah_ikan int(8) NOT NULL,
  total_harga int(8) NOT NULL
);

CREATE TABLE pembayaran (
  id_pembayaran int(8) NOT NULL,
  kode_pembayaran int(8) NOT NULL,
  nama_pembayar varchar(50) NOT NULL,
  status enum('paid','unpaid','','') NOT NULL
);

```
