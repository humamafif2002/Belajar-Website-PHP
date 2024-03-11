<div class="container mt-5">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['Mahasiswa']['nama']; ?></h5>
      <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['Mahasiswa']['nim']; ?></h6>
      <p class="card-text"><?= $data['Mahasiswa']['email']; ?></p>
      <p class="card-text"><?= $data['Mahasiswa']['jurusan']; ?></p>
      <a href="<?= BASEURL; ?>/mahasiswa" class="badge text-bg-primary text-decoration-none">Back</a>
      <a href="<?= BASEURL; ?>" class="badge text-bg-warning text-decoration-none">Update</a>
    </div>
  </div>
</div>