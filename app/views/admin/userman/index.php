<div class="container">
  <div class="content" style="padding:20px;text-align:center">
    <h2>User Manager</h2>
  </div>
  <div class="content">
    <a class="tbl-aksi tbl-add" href="<?= BASEURL; ?>/admin/userman/tambah">+ tambah user</a>
    <div class="tabel-responsive">
      <table class="tabel">

        <thead>
          <tr>
            <th width="10%">No.</th>
            <th width="50%">Username</th>
            <th width="20%">Status</th>
            <th width="20%">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if(!empty($data['user'])){
              $no = 1;
              foreach($data['user'] as $user){

          ?>
          <tr class="<?php echo ($user['sudah'] > 0) ? 'sudah' : "belum" ?>" >
            <td width="10%"><?= $no; ?></td>
            <td width="50%"><?= $user['username']; ?></td>
            <td width="20%"><?php echo ($user['sudah'] > 0) ? 'Sudah' : "Belum" ?></td>
            <td width="20%"><a class="tbl-aksi tbl-hapus" href="<?= BASEURL . '/admin/userman/hapus/' . $user['id']; ?>">Hapus</a>&nbsp;
                <a class="tbl-aksi tbl-edit" href="<?= BASEURL . '/admin/userman/edit/' . $user['id']; ?>">Edit</a>
            </td>
          </tr>
          <?php
              $no++;
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>

</div>