<?php
$fp = fopen("hubungi.txt", "a+");
$nama = $_POST['nama_anda'];
$email = $_POST['email_anda'];
$subject = $_POST['subject'];
$pesan = $_POST['pesan_anda'];

fputs($fp, "$nama||$email||$subject\n||$pesan\n");
fclose($fp);
header("location:index.html");
