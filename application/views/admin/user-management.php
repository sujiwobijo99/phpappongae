<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
    <div class="navbar-form navbar-right">
        <?php echo form_open("admin/search") ?>
        <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Cari mahasiswa...">
        <buttont type:"submit" class="btn btn-success">Cari</buttont>
        <?php echo form_close() ?>
    </div>
    <div class="row">
        <div class="col-lg">
            <?php echo $this->session->flashdata('message'); ?>
            <table class=" table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Email</th>
                        <th scope="col">Activeness</th>
                        <th scope="col">Created Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($usr as $u) : ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $u['name']; ?></td>
                            <td><?php if ($u['role_id'] == 1) {
                                    echo 'Admin';
                                } else if ($u['role_id'] == 2) {
                                    echo 'Member';
                                } else {
                                    echo 'OB';
                                }
                                $u['role_id']; ?>
                            </td>
                            <td><?php echo $u['email']; ?></td>
                            <td>
                                <?php if ($u['is_active'] == 1) {
                                    echo 'Active';
                                } else {
                                    echo 'No';
                                }
                                $u['is_active']; ?></td>
                            <td><?php echo date('d F Y', $u['date_created']) ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/userdelete/') . $u['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin?')">Delete</button>

                            </td>
                        </tr> <?php $i++; ?> <?php endforeach; ?> </tbody>
            </table>
        </div>
    </div>
</div> <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->