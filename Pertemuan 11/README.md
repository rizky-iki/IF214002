# TUGAS

Membuat DDL, DML, DQL sesuai proyek masing-masing

## DDL

```sql
-- Table: public.detail_pemesanan

-- DROP TABLE IF EXISTS public.detail_pemesanan;

CREATE TABLE IF NOT EXISTS public.detail_pemesanan
(
    id_detail_pem character varying(12) COLLATE pg_catalog."default" NOT NULL,
    id_pemesanan character varying(12) COLLATE pg_catalog."default" NOT NULL,
    jumlah integer NOT NULL,
    total_harga integer NOT NULL,
    id_ikan character varying(12) COLLATE pg_catalog."default" NOT NULL,
    id_produsen character varying(12) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT detail_pemesanan_pkey PRIMARY KEY (id_detail_pem),
    CONSTRAINT id_ikan FOREIGN KEY (id_ikan)
        REFERENCES public.ikan (id_ikan) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT id_pemesanan FOREIGN KEY (id_pemesanan)
        REFERENCES public.pemesanan (id_pemesanan) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT id_produsen FOREIGN KEY (id_produsen)
        REFERENCES public.produsen (id_produsen) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.detail_pemesanan
    OWNER to postgres;
-- Table: public.ikan

-- DROP TABLE IF EXISTS public.ikan;

CREATE TABLE IF NOT EXISTS public.ikan
(
    id_ikan character varying(12) COLLATE pg_catalog."default" NOT NULL,
    harga_ikan integer NOT NULL,
    nama_ikan character varying(50) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT ikan_pkey PRIMARY KEY (id_ikan)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.ikan
    OWNER to postgres;
-- Table: public.pembayaran

-- DROP TABLE IF EXISTS public.pembayaran;

CREATE TABLE IF NOT EXISTS public.pembayaran
(
    id_pembayaran character varying(12) COLLATE pg_catalog."default" NOT NULL,
    kode_pembayaran character varying(12) COLLATE pg_catalog."default" NOT NULL,
    nama_pembayar character varying(50) COLLATE pg_catalog."default" NOT NULL,
    jenis_pembayaran jenis_pembayaran NOT NULL,
    id_user character varying(11) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT pembayaran_pkey PRIMARY KEY (id_pembayaran),
    CONSTRAINT id_user UNIQUE (id_user)
        INCLUDE(id_user)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.pembayaran
    OWNER to postgres;
-- Table: public.pemesanan

-- DROP TABLE IF EXISTS public.pemesanan;

CREATE TABLE IF NOT EXISTS public.pemesanan
(
    id_pemesanan character varying(12) COLLATE pg_catalog."default" NOT NULL,
    status status_pemesanan NOT NULL,
    id_user character varying(11) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT pemesanan_pkey PRIMARY KEY (id_pemesanan)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.pemesanan
    OWNER to postgres;
-- Table: public.produsen

-- DROP TABLE IF EXISTS public.produsen;

CREATE TABLE IF NOT EXISTS public.produsen
(
    id_produsen character varying(12) COLLATE pg_catalog."default" NOT NULL,
    nama_produsen character varying(50) COLLATE pg_catalog."default" NOT NULL,
    jenis_produsen character varying(50) COLLATE pg_catalog."default" NOT NULL,
    stok_ikan integer NOT NULL,
    id_ikan character varying(12) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT produsen_pkey PRIMARY KEY (id_produsen),
    CONSTRAINT id_ikan FOREIGN KEY (id_ikan)
        REFERENCES public.ikan (id_ikan) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.produsen
    OWNER to postgres;
-- Table: public.users

-- DROP TABLE IF EXISTS public.users;

CREATE TABLE IF NOT EXISTS public.users
(
    id_user character varying(11) COLLATE pg_catalog."default" NOT NULL,
    email character varying(40) COLLATE pg_catalog."default" NOT NULL,
    password character varying(26) COLLATE pg_catalog."default" NOT NULL,
    nama_lengkap character varying(60) COLLATE pg_catalog."default" NOT NULL,
    no_telepon character varying(16) COLLATE pg_catalog."default" NOT NULL,
    alamat character varying(120) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT users_pkey PRIMARY KEY (id_user)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.users
    OWNER to postgres;


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
