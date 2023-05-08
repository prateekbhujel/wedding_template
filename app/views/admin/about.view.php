<?php $this->view('admin/admin-header');?>

<?php if($action == 'new') : ?>

    <div class = "col-md-6 mx-auto p-3">

    <center><h3>New About Record</h3></center>

    <?php if(!empty($errors)) : ?>
        <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
    <?php endif; ?>
    
    <form enctype="multipart/form-data" method = "post" class="text-center"> 

        <label>Click to change image</label> <br> <br>

       <label>
           <input type="file" onchange="display_image(this.files[0], event)" name="image" class="d-none" >
           <img src="<?=get_image()?>" style="height: 300px;width: 300px;object-fit: cover; cursor: pointer;">
       </label> 
        </br>
        
        <input type="text" value="<?=old_value('title')?>" name="title" class="form-control mt-3 mb-3" placeholder="Title">
        <input type="text" value="<?=old_value('name')?>" name="name" class="form-control mt-3 mb-3" placeholder="Person's Name">
        <input type="text" value="<?=old_value('icon')?>" name="icon" class="form-control mt-3 mb-3" placeholder="Icon Class Name">
        <textarea name="description" rows="8" class="form-control mb-3" placeholder="About ...."><?=old_value('description')?></textarea>
        
        <hr>
        <input type="text" value="<?=old_value('twitter_link')?>" name="twitter_link" class="form-control mt-3 mb-3" placeholder="Twitter Link">
        <input type="text" value="<?=old_value('facebook_link')?>" name="facebook_link" class="form-control mt-3 mb-3" placeholder="Facebook Link">
        <input type="text" value="<?=old_value('linkedin_link')?>" name="linkedin_link" class="form-control mt-3 mb-3" placeholder="LinkedIn Link">
        <input type="text" value="<?=old_value('instagram_link')?>" name="instagram_link" class="form-control mt-3 mb-3" placeholder="Instagram Link">
        <hr>
        <label class="text-start d-block text-secondary">List Order:</label>
            <input type="number" min="0" value="<?=old_value('list_order', 0)?>" name="list_order" class="form-control mb-3 mb-3">
        
        </br>
        <button class = "btn btn-success my-4 float-start">Save</button>
       
        <a href="<?=ROOT?>/admin/About">
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

    <center><h3>Edit About Record</h3></center>

    <?php if(!empty($errors)) : ?>
        <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
    <?php endif; ?>

    <?php if(!empty($row)) : ?>
    
        <form enctype="multipart/form-data" method = "post" class="text-center"> 

            <label>Click to change image</label> <br> <br>

            <label>
            <input type="file" onchange="display_image(this.files[0], event)" name="image" class="d-none" >
            <img src="<?=get_image($row->image)?>" style="height: 300px;width: 300px;object-fit: cover; cursor: pointer;">
            </label> 
            </br>

            <input type="text" value="<?=old_value('title', $row->title)?>" name="title" class="form-control mt-3 mb-3" placeholder="Title">
            <input type="text" value="<?=old_value('name', $row->name)?>" name="name" class="form-control mt-3 mb-3" placeholder="Person's Name">
            <input type="text" value="<?=old_value('icon', $row->icon)?>" name="icon" class="form-control mt-3 mb-3" placeholder="Icon Class Name">
            <textarea name="description" rows="8" class="form-control mb-3" placeholder="About ...."><?=old_value('description',$row->description)?></textarea>
            
            <hr>
            <input type="text" value="<?=old_value('twitter_link',$row->twitter_link)?>" name="twitter_link" class="form-control mt-3 mb-3" placeholder="Twitter Link">
            <input type="text" value="<?=old_value('facebook_link',$row->facebook_link)?>" name="facebook_link" class="form-control mt-3 mb-3" placeholder="Facebook Link">
            <input type="text" value="<?=old_value('linkedin_link',$row->linkedin_link)?>" name="linkedin_link" class="form-control mt-3 mb-3" placeholder="LinkedIn Link">
            <input type="text" value="<?=old_value('instagram_link',$row->instagram_link)?>" name="instagram_link" class="form-control mt-3 mb-3" placeholder="Instagram Link">
            <hr>
            <label class="text-start d-block text-secondary">List Order:</label>
                <input type="number" min="0" value="<?=old_value('list_order', $row->list_order)?>" name="list_order" class="form-control mb-3 mb-3">

            </br>
            <button class = "btn btn-success my-4 float-start">Save</button>

            <a href="<?=ROOT?>/admin/About">
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
        <a href="<?=ROOT?>/admin/About">
            <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
            </a>
    <?php endif;?>
    </div>


<?php elseif($action == 'delete') : ?>
 
    <div class = "col-md-6 mx-auto p-3">

        <center><h3>Delete About Record</h3></center>

        <?php if(!empty($errors)) : ?>
            <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
        <?php endif; ?>

        <?php if(!empty($row)) : ?>  
        <form method = "post" class="text-center"> 
            <div class="alert alert-danger text-center my-3">Are You sureyou want to delete this record ?</div>
            <label>
                <img src="<?=get_image($row->image)?>" style="height: 300px;width: 300px;object-fit: cover;">
            </label> 
        
            <div class="form-control my-2"><?=esc($row->title)?></div>
            </br>

                <button class = "btn btn-danger my-4 float-start">Yes</button>
                <a href="<?=ROOT?>/admin/About">
                    <button type = "button" class = "float-end btn btn-secondary my-4">Cancel</button>
                </a>

        </form>
        
        <?php else:?>
            
            <div class="alert alert-danger text-center">Record Not Found ! </div>
            <a href="<?=ROOT?>/admin/About">
                <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
                </a>
        
        <?php endif;?>

    </div>

<?php else:?>

    <h3>
        About Records 
        <a href="<?=ROOT?>/admin/About/new">
            <button class="btn btn-primary btn-sm">
                New
            </button>
        </a>
    </h3>

    <table class="table table-striped table-bordered">

        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Image</th>
            <th class="text-center">About Title</th>
            <th class="text-center">Person's Name</th>
            <th class="text-center">Icon</th>
            <th class="text-center">Description</th>
            <th class="text-center">List Order</th>
            <th class="text-center text-da">Action</th>
        </tr>
        
        <?php if(!empty($rows)):?>
            <?php foreach($rows as $row):?>
                <tr>
            
                    <td>
                        <?=$row->id?>
                    </td>
                    
                    <td clas="text-center">
                        <img src="<?= get_image($row->image) ?>" style="width:180px; height:180px; object-fit:cover;">
                    </td>
                    
                    <td>
                        <?=esc($row->title)?>
                    </td>
                    
                    <td>
                        <?=esc($row->name)?>
                    </td>
                    
                    <td>
                        <i class="fs-1  fa fa-<?=strtolower($row->icon)?> text-secondary"></i>
                    </td>

                    <td>
                        <?=esc($row->description)?>
                    </td>

                    <td>
                        <?=esc($row->list_order)?>
                    </td>
                    <td>
                        <a href="<?=ROOT?>/admin/About/edit/<?=$row->id?>">
                                <button class="btn btn-primary btn-sm d-block my-1">Edit</button>
                        </a>
                        
                        <a href="<?=ROOT?>/admin/About/delete/<?=$row->id?>">
                                <button class="btn btn-danger btn-sm">Delete</button>
                        </a>
                    </td>

                </tr>
            <?php endforeach;?>
        <?php endif;?>

    </table>

<?php endif;?>

<?php $this->view('admin/admin-footer');?>