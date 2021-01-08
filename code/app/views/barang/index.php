<div class="container">
<div class="jumbotron mt-3">
    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <button type="button" class="btn btn-success tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Barang
        </button>
      </div>
    </div>

    
  
    <div class="row">
        <div class="col-lg-6">
          <h3>Daftar Barang</h3>
          <ul class="list-group">
            <?php foreach( $data['brg'] as $brg ) : ?>
              <li class="list-group-item">
                  <?= $brg['nama']; ?>
                  <a href="<?= BASEURL; ?>/barang/hapus/<?= $brg['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                  <a href="<?= BASEURL; ?>/barang/ubah/<?= $brg['id']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $brg['id']; ?>">ubah</a>
                  <a href="<?= BASEURL; ?>/barang/detail/<?= $brg['id']; ?>" class="badge badge-primary float-right">detail</a>
              </li>
            <?php endforeach; ?>
          </ul>      
        </div>
    </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/barang/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="serialnumber">Serial Number</label>
            <input type="text" class="form-control" id="serialnumber" name="serialnumber" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="merk">Merk</label>
            <input type="text" class="form-control" id="merk" name="merk" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="jenis">Jenis</label>
            <select class="form-control" id="jenis" name="jenis">
              <option value="Inventaris">Inventaris</option>
              <option value="Pribadi">Pribadi</option>
            </select>
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>




