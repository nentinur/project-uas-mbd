<div align="center"> 
  <h1> Pendataan Nilai UN Siswa</h1> 
  <p>Untuk Memenuhi Tugas Akhir Mata Kuliah Manajemen Basis Data Praktikum Managemen Basis Data</p> 
  <p>Dosen pengampu:
Wildan Budiawan Zulfikar S.T., M.Kom dan Eva Nurlatifah M.Sc.</p>
</div>

#### Kelompok 2 Kelas E Manajemen Basis Data

- Nenti Nurnaningsih (1207050090)
- Normalika Shandi (1207050091)
- Rayhan Tsaury (1207050102)

### Deskripsi Proyek 

Website pendataan nilai UN siswa adalah website yang bertujuan untuk mendata nilai- nilai siswa agar lebih terstruktur dan data disimpan baik didalan database sehinggan data tidak mudah hilang.
Website ini menggunakan database yang sudah ditentukan sebelumnya yaitu SQLite. SQLite adalah database berukuran terbatas yang dapat digunakan untuk aplikasi berskala kecil. Website kami juga menggunakan PHP dan Bootstrap untuk menunjang dalam pembuatan wesite ini.

<h3 align="left">Teknologi yang digunakan :</h3>
<p align="left"> <a href="https://www.sqlite.org/" target="_blank" rel="noreferrer"> <img src="https://www.esoftner.com/wp-content/uploads/2019/12/SQLite-Logo-300x300.png" alt="SQLite" width="40" height="40"/> </a> <a href="https://www.php.net/" target="_blank" rel="noreferrer"> <img src="https://www.php.net/images/meta-image.png" alt="PHP" width="40" height="40"/> </a>  <a href="https://getbootstrap.com/" target="_blank" rel="noreferrer"> <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-social-logo.png" alt="Bootstrap" width="40" height="40"/> </a>  

### Intalisasi Database SQLite
Install database SQLite pada : https://www.sqlite.org/download.html
pilih sesuai dengan sistem operasi dan kapasitas pc atau laptop anda.
  
![foto intalisasi](https://github.com/nentinur/project-uas-mbd/blob/master/img/MBD-Intalisasi%20SQLite.png)

Setelah selesai mendownloadnya, kemudian extract file nya.
  
![foto extract zip](https://github.com/nentinur/project-uas-mbd/blob/master/img/MBD-Extract%20ZIP.png)
  
Selanjutnya lakukan setting path pada enverioment variable seperti gambar dibawah ini.

edit environent variable pada sistem variable. klik PATH lalu klik edit, kemudian tambahkan folder tempat menyimpan SQLitenya (contoh : C:\sqlite3 )

![foto setting path1](https://github.com/nentinur/project-uas-mbd/blob/master/img/MBD-Setting%20PATH1.png)
  
![foto setting path2](https://github.com/nentinur/project-uas-mbd/blob/master/img/MBD-Setting%20PATH2.png)
  
### DEMO CRUD
Tampilan awal saat web dibuka, untuk menambah data, bisa langsung klik tambah data
![tampilan awal](https://github.com/nentinur/project-uas-mbd/blob/master/img/CRUD/MBD-Tampilan%20awal.jpg)

tampilan awal halaman tambah data
![tampilan tambah data](https://github.com/nentinur/project-uas-mbd/blob/master/img/CRUD/MBD-Tampilan%20Taambah%20data.jpg)

Kemudian kita isi formnya
![tampilan tambah data 2](https://github.com/nentinur/project-uas-mbd/blob/master/img/CRUD/MBD-Tampilan%20Taambah%20data2.jpg)

Saat meng-klik tambah data, jika data berhasil ditambahkan di database, maka akan tampil tulisan "data berhasil ditambahkan"
![data berhasil ditambahkan](https://github.com/nentinur/project-uas-mbd/blob/master/img/CRUD/MBD-Tampilan%20data%20berhasil%20ditambahkan.jpg)

Dan data yang tadi kita tambahkan akan tampil di halaman awal
![data ditambahkan](https://github.com/nentinur/project-uas-mbd/blob/master/img/CRUD/MBD-Tampilan%20setelah%20data%20di%20tambah.jpg)

Untuk mengantisipasi kesalahan dalam penginputan nilai, kami menyediakan menu untuk mengupdate data, untuk update data, kita bisa langsung klik tombol ubah data, dan kita akan diarahkan ke halaman ubah data
![ubah data](https://github.com/nentinur/project-uas-mbd/blob/master/img/CRUD/MBD-Tampilan%20update%20data.jpg)

Selanjutnya kita tinggal mengganti data yang ingin dirubah
![ubah data 2](https://github.com/nentinur/project-uas-mbd/blob/master/img/CRUD/MBD-Tampilan%20update%20data2.jpg)

setelah meng-klik perbarui data, maka data akan diperbarui dan akan ditampilkan di halaman awal
![berhasil diupdate](https://github.com/nentinur/project-uas-mbd/blob/master/img/CRUD/MBD-Tampilan%20data%20berhasil%20diupdate.jpg)

Jika ingin menghapus data, kita bisa klik tombol hapus, dan nantinya akan keluar dialog untuk memvalidasi tindakan kita, yakin untuk menghapus atau tidak
![hapus](https://github.com/nentinur/project-uas-mbd/blob/master/img/CRUD/MBD-Tampilan%20hapus%20data.jpg)

Setelah klik Ok, maka data akan terhapus
[berhasil hapus](https://github.com/nentinur/project-uas-mbd/blob/master/img/CRUD/MBD-Tampilan%20setelah%20hapus%20data.jpg)

