<?php
include('koneksi.php');
$query = mysqli_query($koneksi, "SELECT * FROM tb_gambar");
?>
<html id="top">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="icon" href="1.jpg">

    <title>Galeri || Edo Kurniawan</title>
    <style>
        html {
            scroll-behavior: smooth;
        }

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
</head>

<body>
    <div class="image-container">
        <div class="text">Galeri</div>
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
    $no = 1;
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <div class="container mt-5 ">
            <div class="row border rounded">
                <div class="col-sm-4">
                    <div class="card thumbnail">
                        <img class="card-img-top" alt="Card image cap" src="image_view.php?id_gambar=<?php echo $row['id_gambar']; ?>" width="100" />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-header">NO :<?php echo $no++; ?></div>
                    <div class="card-body">
                        <h5 class="card-title">Galeri</h5>
                        <p class="card-text">Keterangan : <br><?php echo $row['keterangan']; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nama : <br><?php echo $row['nama_mahasiswa']; ?></li>
                        <li class="list-group-item">Tipe File : <br><?php echo $row['tipe_gambar']; ?></li>
                        <li class="list-group-item">Ukuran File : <?php echo $row['ukuran_gambar']; ?> Kb</li>
                        <li class="list-group-item">Tanggal Upload : <br><?php echo $row['tanggal']; ?></li>
                    </ul>
                    <div class="card-body">
                        <a href="delete_gambar.php?id_gambar=<?php echo $row['id_gambar']; ?>">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="container mt-5">
        <div class="card ">
            <a class="btn btn-dark float-right" href="form_upload.php" role="button">Upload Ulang</a>
        </div>
    </div>

    <footer class="py-5 bg-dark mt-5">
        <div class="container">
            <a href="#top" class="float-right"><i class="fa fa-chevron-circle-up fa-4x text-white"></i></a>
            <p class="m-0 text-center text-white">Copyright &copy; Edo Kurniawan || Follow Me 2020 <i class="fa fa-gratipay"></i></p>
        </div>s
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>