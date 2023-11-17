CREATE DATABASE pweb;

USE pweb;

CREATE TABLE data (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fullname VARCHAR(70) NOT NULL,
    nik VARCHAR(16) NOT NULL,
    nisn VARCHAR(10) NOT NULL,
    email VARCHAR(70) NOT NULL,
    phone VARCHAR(13) NOT NULL,
    place_of_birth VARCHAR(50) NOT NULL,
    date_of_birth DATE NOT NULL,
    gender ENUM("laki - laki", "perempuan") NOT NULL,
    religion ENUM("buddha", "hindu", "islam", "katolik", "khonghucu", "kristen") NOT NULL,
    address VARCHAR(300) NOT NULL,
    postal_code VARCHAR(5) NOT NULL,
    high_school VARCHAR(50) NOT NULL,
    pass_photo VARCHAR(100) NOT NULL,
    ktp VARCHAR(100) NOT NULL,
    diploma VARCHAR(100) NOT NULL,
    transcript VARCHAR(100) NOT NULL,
    region ENUM("depok", "alam sutera", "karawaci", "kalimalang"),
    study_program enum("sistem komputer s1", "sistem informasi s1", "teknik komputer d3", "manajemen informatika d3", "informatika s1", "teknik elektro s1", "teknik mesin s1", "teknik industri s1", "agroteknologi s1", "akuntansi s1", "manajemen s1", "ekonomi syariah s1", "akuntansi d3", "manajemen d3", "arsitektur s1", "desain interior s1", "teknik sipil s1")
);
