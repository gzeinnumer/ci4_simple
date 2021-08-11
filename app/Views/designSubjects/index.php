<?= $this->extend('designLayouts/layout') ?>

<?= $this->section('content') ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">Subject List</h4>
            <p class="card-category">List Of Subject</p>
          </div>

          <div class="card-body">
            <div class="actionbutton mt-2">
              <a class="btn btn-info float-right mb20 mr20" href="<?= site_url('subjectsDesign/create') ?>">Add Subject</a>
            </div>
          </div>
          <div class="card-body table-responsive">
            <?php if (session()->has('message')) { ?>
              <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="material-icons">close</i>
                </button>
                <span>
                  <b> Success - </b> <?= session()->getFlashdata('message') ?></span>
              </div>
            <?php } ?>
            <table class="table table-hover">
              <thead class="text-warning">
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php
                if (count($subjects) > 0) {
                  foreach ($subjects as $subject) { ?>
                    <tr>
                      <td><?= $subject['id'] ?></td>
                      <td><?= $subject['name'] ?></td>
                      <td><?= $subject['description'] ?></td>
                      <td>
                        <a class="btn btn-sm btn-info" href="<?= site_url('subjectsDesign/edit/' . $subject['id']) ?>">Edit</a>
                        <a class="btn btn-sm btn-danger" href="<?= site_url('subjectsDesign/delete/' . $subject['id']) ?>">Delete</a>
                      </td>
                    </tr>
                  <?php }
                } else { ?>
                  <tr>
                    <td colspan="4">No data found.</td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>