<?php
$db = __database();
$where = [
'kd_prodi' => $_GET['id']
];
$query = __ambil($db, "prodi", "*", $where);

$rows = $query->fetch_object();
// print_r($rows);
?>
<div class="card">
<div class="card-header">
<h4>Edit Member</h4>
</div>
<div class="card-body">

<form method="post" action="admin.php?target=prodi&action=update" data-parsley-validate class="form-horizontal form-label-left">

<input type="hidden" name="id" value="<?php echo $rows->kd_prodi; ?>">
<div class="mb-3">
<label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
Nama Prodi
</label>
<div class="col-md-6 col-sm-6 col-lg-12">
<input type="text" id="kd_prodi" name="nama_prodi" value="<?php echo $rows->nama_prodi; ?>" required="required" class="form-control col-md-7 col-xs-12">
</div>
</div>
<div class="mb-3">
<div class="col-md-6 col-sm-6 col-lg-12">
<input type="submit" class="btn btn-success btn-sm" value="Simpan">
<a class="btn btn-danger btn-sm" href="admin.php?target=prodi">Kembali</a>
</div>
</div>
</form>
</div>
</div>