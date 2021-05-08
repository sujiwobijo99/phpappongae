<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors() ?>
                </div>
            <?php endif; ?>
            <?php echo $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New Submenu</a>

            <table class=" table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Activ</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($subMenu as $sm) : ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $sm['title']; ?></td>
                            <td><?php echo $sm['menu']; ?></td>
                            <td><?php echo $sm['url']; ?></td>
                            <td><?php echo $sm['icon']; ?></td>
                            <td><?php echo $sm['is_active']; ?></td>
                            <td>
                                <a href="" data-toggle="modal" data-target="#editSubMenuModal" class="btn btn-success">Edit</a>
                                <a href="<?php echo base_url('menu/hapus/') . $sm['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- MODAL -->

<div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="newSubMenuLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuLabel">Add New Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('menu/submenu'); ?>" method="post">
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Submenu Title">
                        </div>
                        <div class="form-group">
                            <select name="menu_id" id="menu_id" class="form-control">
                                <?php foreach ($menu as $m) : ?>
                                    <option value="<?php echo $m['id']; ?>"><?php echo $m['menu']; ?></option>

                                <?php endforeach; ?>
                            </select>
                        </div>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                    <label class="form-check-label" for="is_active">
                                        Active?
                                    </label>
                                </div>
                            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>




<!-- <div class=" modal fade" id="editSubMenuModal" tabindex="-1" aria-labelledby="editSubMenuLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSubMenuLabel">Edit Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('admin/editUser'); ?>" method="post">
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Submenu Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo $user_sub_menu['title']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Url</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $user_sub_menu['url']; ?>">
                                <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Menu</label>
                            <div class="col-sm-10">
                                <select name="role_id" id="role_id" class="form-control">
                                    <?php foreach ($user_sub_menu as $usm) : ?>
                                        <option value="<?php echo $ur['role']; ?>"><?php echo $usm['menu_id']; ?></option>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                <label class="form-check-label" for="is_active">
                                    Active?
                                </label>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
        </div>
    </div>
</div> -->