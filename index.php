<?php

$host = "/vsga-final-project";

$parsed_url = parse_url($_SERVER['REQUEST_URI']);

if ($parsed_url['path'] === $host . '/') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include_once "./src/pages/LandingPage.php";
    }
}

// anggota
if ($parsed_url['path'] === $host . '/anggota') {

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include_once "./src/pages/anggota/anggota_read.php";
    }
}

if ($parsed_url['path'] === $host . '/anggota/edit') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {        
        include_once "./src/pages/anggota/anggota_edit.php";
    }
}

if ($parsed_url['path'] === $host . '/anggota/add') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {        
        include_once "./src/pages/anggota/anggota_add.php";
    }
}
// end of anggota


if ($parsed_url['path'] === $host . '/transaksi') {

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include_once "./src/pages/transaksi/transaksi_read.php";
    }
}

if ($parsed_url['path'] === $host . '/login') {

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include_once "./src/pages/auth/login.php";
    }
}

if ($parsed_url['path'] === $host . '/buku') {

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include_once "./src/pages/buku/buku_read.php";
    }
}