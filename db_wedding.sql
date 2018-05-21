drop database if EXISTS db_wedding;
create database db_wedding;

use db_wedding; 

drop table if EXISTS tbl_pelanggan;
create table tbl_pelanggan (id_pelanggan char(4) primary key, 
                            nama_pelanggan varchar(50), 
                            no_telp varchar(13), 
                            Alamat text, 
                            email varchar (50),
                            psw varchar(50)) ENGINE=INNODB;
                            
drop table if EXISTS tbl_wedding;
create table tbl_wedding (id_package varchar(4) primary key,
                          nama_package varchar(50), 
                          harga int, 
                          descript text)engine=INNODB;
                          
drop table if EXISTS tbl_pemesanan;
create table tbl_pemesanan (id_pemesanan int AUTO_INCREMENT PRIMARY KEY,
                            id_pelanggan char(4),
                            id_wedding char(4))ENGINE=INNODB;


insert into tbl_wedding values ("wd01", "Paket Vip", 1200000, "Pelaminan");