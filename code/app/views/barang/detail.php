<div class="container mt-5">
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['brg']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['brg']['serialnumber']; ?></h6>
        <p class="card-text"><?= $data['brg']['merk']; ?></p>
        <p class="card-text"><?= $data['brg']['jenis']; ?></p>
        <a href="<?= BASEURL; ?>/barang" class="card-link">Kembali</a>
      </div>
    </div>

</div>