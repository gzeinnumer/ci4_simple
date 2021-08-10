<?= $this->extend('designLayouts/layout') ?>

<?= $this->section('content') ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">Employees Stats</h4>
            <p class="card-category">New employees on 15th September, 2016</p>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead class="text-warning">
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php 
                if(count($subjects) > 0){
                  foreach($subjects as $subject){
                ?>
                  <tr>
                    <td><?= $subject['id'] ?></td>
                    <td><?= $subject['name'] ?></td>
                    <td><?= $subject['description'] ?></td>
                    <td align="center">
                      <a class="btn btn-sm btn-info" href="<?= site_url('subjectsDesign/edit/'.$subject['id']) ?>">Edit</a>
                      <a class="btn btn-sm btn-danger" href="<?= site_url('subjectsDesign/delete/'.$subject['id']) ?>">Delete</a>
                    </td>
                  </tr>
                <?php
                  }

                }else{
                ?>
                  <tr>
                    <td colspan="4">No data found.</td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>