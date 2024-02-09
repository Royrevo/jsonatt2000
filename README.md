# jsonatt2000
Aplikasi untuk menampilkan data JSON dari Sotware Attendance ATT2000 dengan menggunakan PHP

Persyaratan yang diperlukan :

Semua Aplikasi harus bearda didalam Sistem Bit Version yang sama.
	
	32 Bit :
   		-  Apache Server 32 Bit
   		-  ODBC Driver Ms Access 32 Bit
      -  MS Access 32 Bit

	64 Bit :
   		-  Apache Server 64 Bit
   		-  ODBC Driver Ms Access 64 Bit
      -  MS Access 64 Bit
     
Langkah - langkah :

1.  Masukkan ODBC Driver untuk MS Access di ODBC Administrator
2. Sesuaikan Path dari Database MS Access di file Config.php dengan lokasi file database msaccess
	contoh : $database_path = "C:\Program Files (x86)\Attendance Management\att2000.mdb";
3. Buat Koneksi PHP ke database MS Access menggunakan ODBC Driver tersebut
<?php
  $database = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$database_path; Uid=$db_username; Pwd=$db_password;");
?>
4. Tes Koneksi ke database
5. Apabila ada error : 
   "Fatal error: Uncaught PDOException: could not find driver"
    Buka file php.ini dan edit Baris "extension=pdo_odbc" dengan menghilangkan tanda titik koma ";"
6. Restart Apache Server
7. Lakukan tes koneksi kembali
8. Selesai

Catatan Penting :

Apabila langkah langkah diatas PHP belum bisa terkoneksi ke MS Access atau masih terjadi error :

1. Maka pastikan di ODBC Data Source Administrator di Kolom "Driver", kalau MS Access Driver (*.mdb, *.accdb) sudah terpasang
2. Pastikan System Bit Version Ms Access SAMA dengan Bit version Apache Server 
3. Apabila masih terjadi error, Install ulang semua aplikasi dengan tahapan :
   - Install MS Access kemudian Install Apache Server
4. Bila masih terdapat Error, maka Repair Windows dengan :
	Go to the Windows Media Creation Link
	https://www.microsoft.com/en-us/software-download/windows10
	untuk mengupdate Windows 10








