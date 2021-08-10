<?= $this->extend('designLayouts/layout') ?>

<?= $this->section('content') ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
<?= old('id',$subject['id']) ?>

<?= old('name',$subject['name']) ?>

<?= old('description',$subject['description']) ?>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>