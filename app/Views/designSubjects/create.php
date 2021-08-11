<?= $this->extend('designLayouts/layout') ?>

<?= $this->section('content') ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add Subhect</h4>
            <p class="card-category">Complete your Subject</p>
          </div>
          <div class="card-body">
            <br>
            <?php $validation = \Config\Services::validation(); ?>
            <form action="<?= site_url('subjectsDesign/store') ?>" method="post">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Name</label>
                    <input type="text" class="form-control" name="name" required value="<?= old('name') ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Description</label>
                    <input type="text" class="form-control" name="description" required value="<?= old('description') ?>">
                    <!-- Error -->
                  </div>
                </div>
              </div>
              <br>
              <button type="submit" class="btn btn-success" name="submit">Submit</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>