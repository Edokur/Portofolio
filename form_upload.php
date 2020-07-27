<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="1.jpg">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <style>
        .image-container {
            background-image: url("image/black.jpg");
            background-size: cover;
            position: relative;
            height: 300px;
        }

        .text {
            background-color: white;
            color: black;
            font-size: 10vw;
            font-weight: bold;
            margin: 0 auto;
            padding: 10px;
            width: 60%;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            mix-blend-mode: screen;
        }
    </style>

    <title>Upload || Edo Kurniawan</title>
</head>

<body>
    <div class="image-container">
        <div class="text">UPLOAD</div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ml-auto">
        <div class="container">
            <a class="navbar-brand" href="#first">EK || Edo Kurniawan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Anime</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form_upload.php">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="upload.php">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    include('koneksi.php');
    if (isset($_POST['tombol'])) {
        if (!isset($_FILES['gambar']['tmp_name'])) {
            echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
        } else {
            $nama = $_POST['nama'];
            $file_name = $_FILES['gambar']['name'];
            $file_size = $_FILES['gambar']['size'];
            $file_type = $_FILES['gambar']['type'];
            if ($file_size < 1000000 and ($file_type == 'image/jpeg' or $file_type == 'image/png')) {
                $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
                $keterangan = $_POST['keterangan'];
                $waktu = $_POST['tanggal_up'];
                mysqli_query($koneksi, "insert into tb_gambar (nama_mahasiswa,gambar,nama_gambar,tipe_gambar,ukuran_gambar,keterangan,tanggal) values ('$nama','$image','$file_name','$file_type','$file_size','$keterangan','$waktu')");
                header("location:upload.php");
            } else {
                echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai silahkan Upload Ulang</i></u></b></span>';
            }
        }
    }
    ?>
    <section id="upload" class="upload mt-5" style="height: 300px;">
        <div class="container">
            <form method="post" action="" enctype="multipart/form-data">
                <table class="card">
                    <div class="form-group">
                        <tr>
                            <td><label for="">Nama Pengupload </label></td>
                            <td>:</td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <td>Gambar</td>
                            <td>:</td>
                            <td><input type="file" name="gambar" required="required" multiple /></td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <td> </td>
                            <td></td>
                            <td>
                                <p style="color: red;">*Ekstensi yang diperbolehkan hanya .jpeg dan .png</p>
                            </td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <td>Tanggal upload</td>
                            <td>:</td>
                            <td><input type="date" name="tanggal_up"></td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td><textarea name="keterangan" rows="3"></textarea></td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="tombol" /></td>
                        </tr>
                    </div>
                </table>
            </form>
        </div>
    </section>

    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <center>
                        <a href="https://web.facebook.com/edo.kurniawan.5832343" class="fa fa-facebook fa-2x"></a>
                        <a href="https://www.youtube.com/channel/UCwqhYq23q3BRPLRymT7PVRw?view_as=subscriber" class="fa fa-youtube fa-2x"></a>
                        <a href="https://www.instagram.com/edokrrnawan_/?hl=id" class="fa fa-instagram fa-2x"></a>
                        <a href="https://dribbble.com/Czode" class="fa fa-dribbble fa-2x"></a>
                        <a href="https://www.linkedin.com/in/edo-k-685a11125/" class="fa fa-linkedin fa-2x"></a>
                    </center>
                </div>
            </div>
            <p class="m-0 text-center text-white">Copyright &copy; Edo Kurniawan || Follow Me 2020 <i class="fa fa-gratipay"></i></p>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>