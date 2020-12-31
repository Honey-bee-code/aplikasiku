<?php
// karena session sudah dimulai maka menggunakan if
if (!isset($_SESSION)) {

    session_start();
    
}
    // cek apakah yang mengakses ini sudah login
    if ($_SESSION['level'] !== "2")
    {
        header("location: index.php");
    }

?>
    <nav class="navbar navbar-expand-sm navbar-light sticky-top" style="background-color: #cccccc;">
        <a class="navbar-brand" href="index.php">
            AplikasiKu
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?menu=data_siswa">Data Siswa<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="" method="GET">
                <a class="btn btn-secondary" href="logout.php">Keluar</a>
            </form>
        </div>
    </nav>
