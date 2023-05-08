<?php $this->view('admin/admin-header');?>

<?php if($action == 'new') : ?>

    <div class = "col-md-6 mx-auto p-3">

    <center><h3>New Setting Record</h3></center>

    <?php if(!empty($errors)) : ?>
        <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
    <?php endif; ?>
    
    <form enctype="multipart/form-data" method = "post" class="text-center"> 

        <input type="text" value="<?=old_value('setting')?>" name="setting" class="form-control mt-3 mb-3" placeholder="Setting Name">
       
        <select name="type" class="form-select mb-3">
            <option <?= old_select('type','text')?> value="text">Text</option>
            <option <?= old_select('type','image')?> value="image">Image</option>
            <option <?= old_select('type','number')?> value="number">Number</option>
        </select>
        </br>

        <button class = "btn btn-success my-4 float-start">Save</button>
        <a href="<?=ROOT?>/admin/settings">
        <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
        </a>

    </form>
    
    <script>
        //Display Image function
        function display_image(file, e)
        {
            let img = e.currentTarget.parentNode.querySelector("img");

            img.src = URL.createObjectURL(file);
        }
    </script>
    </div>

<?php elseif($action == 'edit') : ?>
    
    <div class = "col-md-6 mx-auto p-3">

    <center><h3>Edit Setting Record</h3></center>

    <?php if(!empty($errors)) : ?>
        <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
    <?php endif; ?>

    <?php if(!empty($row)) : ?>
    
        <form enctype="multipart/form-data" method = "post" class="text-center"> 

            
            <input type="text" value="<?=old_value('setting',$row->setting)?>" name="setting" class="form-control mt-3 mb-3" placeholder="Setting Name">
            <br>
            
            <?php if($row->type == 'image'):?>
                <label>Click to change image</label> <br>
                <label>
                    <input type="file" onchange="display_image(this.files[0], event)" name="image" class="d-none" >
                    <img src="<?=get_image($row->value)?>" style="height: 300px;width: 300px;object-fit: cover; cursor: pointer;">
                </label> 

                <?php else:?>
                    <input type="text" value="<?=old_value('setting',$row->value)?>" name="value" class="form-control mt-3 mb-3" placeholder="Setting Value">

            <?php endif;?>
            </br>

            <button class = "btn btn-success my-4 float-start">Save</button>
            <a href="<?=ROOT?>/admin/settings">
            <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
            </a>

         </form>

        <script>
            //Display Image function
            function display_image(file, e)
            {
                let img = e.currentTarget.parentNode.querySelector("img");

                img.src = URL.createObjectURL(file);
            }
        </script>
    
    <?php else:?>
        <div class="alert alert-danger text-center">Record Not Found ! </div>
        <a href="<?=ROOT?>/admin/settings">
            <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
            </a>
    <?php endif;?>
    </div>


<?php elseif($action == 'delete') : ?>
 
    <div class = "col-md-6 mx-auto p-3">

        <center><h3>Delete Setting Record</h3></center>

        <?php if(!empty($errors)) : ?>
            <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
        <?php endif; ?>

        <?php if(!empty($row)) : ?>
            
                
        <form method = "post" class="text-center"> 
            <div class="alert alert-danger text-center my-3"> Are You sure You Want To Delete This Record ?</div>
            
            <div class="form-control my-3"><?=old_value('setting',$row->setting)?></div>
            
            <?php if($row->type == 'image') :?>
                <label>
                    <img src="<?=get_image($row->image)?>" style="height: 300px;width: 300px;object-fit: cover;">
                </label> </br> 
            
            <?php else:?>
                <div class="form-control my-3"><?=old_value('value', $row->value)?></div>
            
            <?php endif;?>

                <button class = "btn btn-danger my-4 float-start">Yes</button>
                <a href="<?=ROOT?>/admin/settings">
                    <button type = "button" class = "float-end btn btn-secondary my-4">Cancel</button>
                </a>

        </form>
        
        <?php else:?>
            
            <div class="alert alert-danger text-center">Record Not Found ! </div>
            <a href="<?=ROOT?>/admin/settings">
                <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
                </a>
        
        <?php endif;?>

    </div>

<?php else:?>

    <h3>
        Settings 
        <a href="<?=ROOT?>/admin/settings/new">
            <button class="btn btn-primary btn-sm">
                New
            </button>
        </a>
    </h3>

    <table class="table table-striped table-bordered">

        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Settings</th>
            <th class="text-center">Type</th>
            <th class="text-center">Value</th>
            <th class="text-center text-da">Action</th>
        </tr>
        
        <?php if(!empty($rows)):?>
            <?php foreach($rows as $row):?>
                <tr>
            
                    <td>
                        <?=$row->id?>
                    </td>
                    
                    <td>
                        <?=esc($row->setting)?>
                    </td>
                    
                    <td>
                        <?=esc($row->type)?>
                    </td>

                    <?php if($row->type == 'image'):?>
                        <td clas="text-center">
                            <img src="<?= get_image($row->value) ?>" style="width:180px; height:180px; object-fit:cover;">
                        </td>
                    
                    <?php else:?>
                        <td>
                            <?=esc($row->value)?>
                        </td>
                    <?php endif;?>

                    <td class="text-center">
                        <a href="<?=ROOT?>/admin/settings/edit/<?=$row->id?>">
                                <button class="btn btn-primary btn-sm">Edit</button>
                        </a>
                        
                        <a href="<?=ROOT?>/admin/settings/delete/<?=$row->id?>">
                                <button class="btn btn-danger btn-sm">Delete</button>
                        </a>
                    </td>

                </tr>
            <?php endforeach;?>
        <?php endif;?>

    </table>

<?php endif;?>

<?php $this->view('admin/admin-footer');?>