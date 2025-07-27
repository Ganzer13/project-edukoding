<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Edukasi Koding</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">EduKoding</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarnav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#materi">Materi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#daftar">Pendaftaran</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
    
        <h1>Selamat datang di EduKoding!</h1>

        <p>Platform terbaik untuk belajar <b>Pemrograman Web</b> dari dasar. Kami menyediakan materi yang <i>mudah dipahami</i> dan terstruktur</p>

        <hr>

        <div class="text-center">
        <img src="images/gambar.jpeg" class="img-fluid rounded" alt="Siswa sedang belajar" width="600">
        </div>

        <hr id="materi">

        <h2 class="mt-5">Materi yang Tersedia</h2>
        <ul>
            <li>HTML Dasar</li>
            <li>CSS & Bootstrap</li>
            <li>JavaScript Interaktif</li>
            <li>PHP & Database MySQL</li>
        </ul>

        <h2 class="mt-4">Jadwal Kelas</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Hari</th>
                    <th>Materi</th>
                    <th>Jam</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Senin & Rabu</td>
                    <td>HTML & CSS</td>
                    <td>19:00 - 21:00</td>
                </tr>
                <tr>
                    <td>Selasa & Kamis</td>
                    <td>JavaScript & PHP</td>
                    <td>19:00 - 21:00</td>
                </tr>
            </tbody>
        </table>

        <hr>

        <h2 class="mt-5">Contoh Materi Video & Audio</h2>
        <div class="row">
            <!-- Video YouTube -->
            <div class="col-md-6">
                <h4>Video: Pengenalan HTML</h4>
                <div class="ratio ratio-16x9">
                    <iframe
                        src="https://www.youtube.com/embed/IKr7WTv9vTc?si=uwWirgszkcmboo1U"
                        title="Pengenalan HTML"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- Audio MP3 dari Internet -->
            <div class="col-md-6">
                <h4>Audio: Podcast Motivasi Belajar</h4>
                <audio controls class="w-100 mt-4">
                    <source
                        src="audio/motivasi.mp3"
                        type="audio/mpeg">
                        Browser Anda tidak mendukung tag audio.
                </audio>
            </div>
        </div>


        <hr id="daftar">

        <h2 class="mt-5">Form Pendaftaran Kursus</h2>
        <form id="form-pendaftaran" action="proses_pendaftaran.php" method="POST" class="border p-4 rounded bg-light">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div id="eror-message" class="alert alert-danger d-none"></div>
            <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
        </form>

    </div>
    <footer class="bg-dark text-white text-center p-3 mt-5">
        <p>Hak Cipta &copy; 2025 EduKoding</p>
    </footer>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>