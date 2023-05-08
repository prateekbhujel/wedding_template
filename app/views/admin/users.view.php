<?php $this->view('admin/admin-header');?>

<?php if($action == 'new' && user('super_admin') == 1 ) : ?>

    <div class = "col-md-6 mx-auto p-3">

    <h3>New User Record</h3>

    <?php if(!empty($errors)) : ?>
        <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
    <?php endif; ?>
    
    <form method = "post">

        <input value="<?=old_value('username')?>" type="text" class="form-control mt-3" name="username" placeholder="Username">
        <input value="<?= old_value('email')?>" type="email" class="form-control mt-3" name="email" placeholder="Email">
        <input value="<?=old_value('password')?>" type="text" class="form-control mt-3" name="password" placeholder="Password">

        <?php if (user('super_admin') == 1):?>
            <div class="form-control mt-2">
                <input type="radio"name="super_admin" value="1" >
                <label for="Super Admin">SUPER ADMIN</label><br>
                <input type="radio" class="my-3"name="super_admin" value="0" checked>
                <label for="Admin">ADMIN</label><br>
            </div>
        <?php endif;?>

        <button class = "btn btn-success my-4">Save</button>
        <a href="<?=ROOT?>/admin/users">
        <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
        </a>

    </form>
    </div>

<?php elseif($action == 'edit'&& user('super_admin') == 1 ) : ?>
    
    <div class = "col-md-6 mx-auto p-3">

    <h3>Edit User Record</h3>

    <?php if(!empty($errors)) : ?>
        <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
    <?php endif; ?>

    <?php if(!empty($row)) : ?>
        <form method = "post">

            <input value="<?=old_value('username', $row->username)?>" type="text" class="form-control mt-3" name="username" placeholder="Username">
            <input value="<?= old_value('email', $row->email)?>" type="email" class="form-control mt-3" name="email" placeholder="Email">
            <input value="<?=old_value('password')?>" type="text" class="form-control mt-3" name="password" placeholder="Password (Leave Empty To keep old one.)">
            <?php if (user('super_admin') == 1):?>
                <div class="form-control mt-2">
                    <input type="radio"name="super_admin" value="1" <?php echo ($row->super_admin == 1) ?'checked':'';?>>
                    <label for="Super Admin">SUPER ADMIN</label><br>
                    <input type="radio" class="my-3"name="super_admin" value="0"<?php echo ($row->super_admin == 0) ?'checked':'';?>>
                    <label for="Admin">ADMIN</label><br>
                </div>
            <?php endif;?>
            <button class = "btn btn-success my-4">Save</button>
            
            <a href="<?ROOT?>/admin/users">
            <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
            </a>

        </form>
    <?php else:?>
        <div class="alert alert-danger text-center">Record Not Found ! </div>
        <a href="<?=ROOT?>/admin/users">
            <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
            </a>
    <?php endif;?>
    </div>


<?php elseif($action == 'delete'&& user('super_admin') == 1 ) : ?>
 
    <div class = "col-md-6 mx-auto p-3">

        <h3>Delete User Record</h3>

        <?php if(!empty($errors)) : ?>
            <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
        <?php endif; ?>

        <?php if(!empty($row)) : ?>
            
            <form method = "post">
                <div class="alert alert-danger text-center my-3">Are You sureyou want to delete this record ?</div>
                <div class="form-control mt-3"><?=old_value('username', $row->username)?></div>
                <div class="form-control mt-3"><?= old_value('email', $row->email)?></div>

                <button class = "btn btn-danger btn-sm my-4">Yes</button>

                <a href="<?ROOT?>/admin/users">
                <button type = "button" class = "float-end btn btn-secondary my-4">Cancel</button>
                </a>

            </form>
        
        <?php else:?>
            
            <div class="alert alert-danger text-center">Record Not Found ! </div>
            <a href="<?=ROOT?>/admin/users">
                <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
                </a>
        
        <?php endif;?>

    </div>

<?php else:?>

    <h3>
        Users 
        <a href="<?=ROOT?>/admin/users/new">
            <button class="btn btn-primary btn-sm">
                New
            </button>
        </a>
    </h3>

    <table class="table table-striped table-bordered">

        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Username</th>
            <th class="text-center">Email</th>
            <th class="text-center text-da">Action</th>
        </tr>
        
        <?php if(!empty($rows)):?>
            <?php if(user('super_admin') == 1 ):?>
            <?php foreach($rows as $row):?>
                <tr>
                    <td class="text-center"><?=$row->id?></td>
                    <td class="text-center"><?=$row->username?></td>
                    <td class="text-center"><?=$row->email?></td>
                    <td class="text-center">
                        <a href="<?=ROOT?>/admin/users/edit/<?=$row->id?>">
                            <button class="btn btn-primary btn-sm me-2">Edit</button>
                            </a>
                        <a href="<?=ROOT?>/admin/users/delete/<?=$row->id?>">
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>
        <?php endif;?>
        <?php endif;?>

    </table>

<?php endif;?>

<?php $this->view('admin/admin-footer');?>