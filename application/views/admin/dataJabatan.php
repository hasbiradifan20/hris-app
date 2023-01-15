<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataJabatan/tambah_data') ?>"><i class="fas fa-plus"></i>Tambah Data</a>
<table class="table table-bordered table-stiped">
<tr>
    <th class="text-center">No</th>
    <th class="text-center">Nama Jabatan</th>
    <th class="text-center">Action</th>


</tr>
<?php $no = 1; foreach ($jabatan as $j) : ?>
    <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $j->nama_jabatan ?></td>
    <td>  <center>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataJabatan/update_data/' .$j->id_jabatan) ?>"><i class="fas fa-edit"></i></a>
        <a onclick="return confirm('Yakin Hapus')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataJabatan/delete_data/' .$j->id_jabatan) ?>"><i class="fas fa-trash"></i></a>
    </center>
    </center>
    </td>
    </tr>
    <?php endforeach; ?>
</table>



</div>
