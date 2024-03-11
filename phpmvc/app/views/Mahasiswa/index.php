      <!-- Modal -->
      <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama Mahasiswa" name="nama">
                </div>
                <div class="mb-3">
                  <label for="nim" class="form-label">Nim</label>
                  <input type="number" class="form-control" id="nim" placeholder="Nim Mahasiswa" name="nim">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email Mahasiswa" name="email">
                </div>

                <div class="form-group">
                  <select class="form-select form-select-sm" aria-label="Small select example" id="jurusan" name="jurusan">
                    <option selected disabled>Pilih jurusan</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Pangan">Teknik Pangan</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                  </select>
                </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      <div class="container mt-4">
        <div class="row ">
          <div class="col-4">
            <?= Flasher::flash(); ?>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-4">

            <!-- trigger modal -->
            <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
              Tambah Mahasiswa
            </button>

            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
              <?php foreach ($data['Mahasiswa'] as $mhs) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-start"><?= $mhs['nama']; ?>
                  <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary text-decoration-none ">Detail</a>

                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>