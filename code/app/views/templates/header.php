<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>
<body>



<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="<?= BASEURL; ?>/home">Warehouse</a>
  <form class="form-inline" action="<?= BASEURL; ?>/barang/cari" method="post">
    <input class="form-control mr-sm-2" type="search" placeholder="cari barang.." aria-label="Search" name="keyword" id="keyword" autocomplete="off">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>