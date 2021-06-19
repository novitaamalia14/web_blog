CREATE DATABASE db_blog;

CREATE TABLE tb_kategori (
	id_kategori INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nama VARCHAR(256) NOT NULL,
	keterangan TEXT DEFAULT NULL
);


CREATE TABLE tb_post (
	id_post INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	tangggal DATE,
	slug VARCHAR(100) NOT NULL,
	title VARCHAR(256) NOT NULL,
	keterangan TEXT NOT NULL,
	id_cat INT(11) NOT NULL,
	FOREIGN KEY (id_cat) REFERENCES tb_kategori(id_kategori) ON UPDATE CASCADE ON DELETE RESTRICT
);


CREATE TABLE tb_photo (
	id_photo INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	tangggal DATE,
	title VARCHAR(256) NOT NULL,
	keterangan TEXT NOT NULL,
	post_id INT(11) NOT NULL,
	FOREIGN KEY (post_id) REFERENCES tb_post(id_post) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE tb_album (
	id_album INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nama VARCHAR(256) NOT NULL,
	keterangan TEXT NOT NULL,
	photo_id INT(11) NOT NULL,
	FOREIGN KEY (photo_id) REFERENCES tb_photo(id_photo) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE tb_admin (
  admin_id int(11) NOT NULL,
  admin_name varchar(50) NOT NULL,
  admin_password varchar(256) NOT NULL
)