-- Table: public.Tabel gudang

-- DROP TABLE IF EXISTS public."Tabel gudang";

CREATE TABLE IF NOT EXISTS public."Tabel gudang"
(
    id_ikan character(16) COLLATE pg_catalog."default" NOT NULL,
    nama character varying(30) COLLATE pg_catalog."default" NOT NULL,
    jenis_iksn character varying(30) COLLATE pg_catalog."default" NOT NULL,
    stok_ikan character varying(30) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "Tabel gudang_pkey" PRIMARY KEY (id_ikan, jenis_iksn, nama, stok_ikan)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public."Tabel gudang"
    OWNER to postgres;
    
    
    -- Table: public.admin

-- DROP TABLE IF EXISTS public.admin;

CREATE TABLE IF NOT EXISTS public.admin
(
    id_admin character varying(16) COLLATE pg_catalog."default",
    "Email_admin" character(30) COLLATE pg_catalog."default" NOT NULL,
    pass_admin character(30) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT admin_pkey PRIMARY KEY ("Email_admin", pass_admin)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.admin
    OWNER to postgres;
    
    
    -- Table: public.id_pemesanan

-- DROP TABLE IF EXISTS public.id_pemesanan;

CREATE TABLE IF NOT EXISTS public.id_pemesanan
(
    id_user character(16) COLLATE pg_catalog."default" NOT NULL,
    id_pembayaran character varying(16) COLLATE pg_catalog."default" NOT NULL,
    tanggal character(8) COLLATE pg_catalog."default" NOT NULL,
    status character varying(8) COLLATE pg_catalog."default" NOT NULL,
    tabel_harga character(60) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT id_pemesanan_pkey PRIMARY KEY (id_user, id_pembayaran, tanggal, status, tabel_harga)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.id_pemesanan
    OWNER to postgres;
    
    
    -- Table: public.tabel_nelayan

-- DROP TABLE IF EXISTS public.tabel_nelayan;

CREATE TABLE IF NOT EXISTS public.tabel_nelayan
(
    id_nelayan character(16) COLLATE pg_catalog."default" NOT NULL,
    nana_nelayan character varying(16) COLLATE pg_catalog."default" NOT NULL,
    jenis_kelamin character varying(16) COLLATE pg_catalog."default" NOT NULL,
    jenis_ikan character varying(16) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT tabel_nelayan_pkey PRIMARY KEY (id_nelayan, nana_nelayan, jenis_kelamin, jenis_ikan)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.tabel_nelayan
    OWNER to postgres;
    
    
    
    -- Table: public.user

-- DROP TABLE IF EXISTS public."user";

CREATE TABLE IF NOT EXISTS public."user"
(
    id_user character varying(30) COLLATE pg_catalog."default" NOT NULL,
    nama_lengkap character(30) COLLATE pg_catalog."default" NOT NULL,
    alamat character(60) COLLATE pg_catalog."default" NOT NULL,
    no_telepon character varying(16) COLLATE pg_catalog."default" NOT NULL,
    email character(30) COLLATE pg_catalog."default" NOT NULL,
    password character varying(8) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT user_pkey PRIMARY KEY (id_user, nama_lengkap, alamat, no_telepon, email, password)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public."user"
    OWNER to postgres;
