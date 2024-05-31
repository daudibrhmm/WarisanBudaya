<?php

//bacground image
$museumMulawarman = '../../image/museummulawarman.jpg';
$museumSumba = '../../image/museumsumba.jpg';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Warisan Budaya</title>
    <meta charset="UTF-8" />

    <!-- icon -->
    <link rel="icon" href="../../Website Warisan Budaya/image/icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Styles -->
    <link rel="stylesheet" href="../Musium/musiumStyles.css" />
</head>

<body>
    <!-- Navbar Start -->
    <nav class=" navbar">
        <a href="#" class="navbar-logo">Warisan<span>Budaya</span></a>

        <div class="navbar-nav">
            <ul>
                <li><a href="../index.php">Beranda</a></li>
                <li><a href="#">Galeri</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li>
                    <a href="#informasi" id="chevron-down">Kategori<i data-feather="chevron-down"></i>
                        <ul class="dropdown">
                            <li><a href="#">Musium</a></li>
                            <li><a href="#">Tarian</a></li>
                            <li><a href="#">Bangunan</a></li>
                        </ul>
                    </a>
                </li>
            </ul>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="humburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Card Start -->
    <section class="cards">
        <article class="card">
            <div class="card-img"></div>
            <a href="../Blog/Pulau Kalimantan/Kalimantan Timur/museumMulawarman.php">
                <div class="card-img-hover" style="background-image: url('<?php echo $museumSumba; ?>')">
                </div>
            </a>
            <div class="card-info">
                <span class="card-category">Museum</span>
                <h5 class="card-title">Museum Sumba, Nusa Tenggara Timur</h5>
                <p class="card-desc">Terletak di Waingapu, Sumba Timur, Nusa Tenggara Timur, Indonesia. Museum ini
                    adalah tempat
                    untuk mengeksplorasi kebudayaan dan warisan budaya unik dari pulau Sumba.</p>
            </div>
        </article>

        <article class="card">
            <div class="card-img"></div>
            <a href="../Blog/Pulau Kalimantan/kalimantan Timur/museumMulawarman.php">
                <div class="card-img-hover" style="background-image: url('<?php echo $museumMulawarman; ?>')">
                </div>
            </a>
            <div class="card-info">
                <span class="card-category">Museum</span>
                <h5 class="card-title">Museum Mulawarman, Kalimantan Timur</h5>
                <p class="card-desc">Terletak di Kota Tenggarong, Kalimantan Timur, Indonesia. Museum Mulawarman adalah
                    museum
                    yang menggambarkan sejarah dan kekayaan budaya suku Dayak dan kehidupan di Kalimantan Timur.</p>
            </div>
        </article>
    </section>

    <section class="cards">


    </section>
    <!-- Card End -->

    <!-- Kritik dan Saran Start -->
    <div class="container-saran">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h2 class="fw-bold">FEEDBACK</h2>
            <div class="mb-3">
                <label for="namaUser" class="form-label">Name :</label>
                <input type="text" class="form-control" name="namaUser" aria-describedby="nameHelp" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address :</label>
                <input required type="email" class="form-control" name="email" aria-describedby="emailHelp"
                    placeholder="name@example.com">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="feedback" class="form-label">Feedback :</label>
                <textarea class="form-control" name="feedback" rows="3" required></textarea>
            </div>

            <button type="submit" name="sent" class="btn btn-primary">Send</button>
        </form>
    </div>
    <!-- Kritik dan Saran End -->


    <!-- Footer Start -->
    <div class="footer">
        <p>&copy;copyright m-punk 2024</p>
    </div>
    <!-- Footer End -->

    <!-- Feather Icons -->
    <script>
    feather.replace();
    </script>


    <script src="../Website Warisan Budaya/JS/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>