<?php $this->view('admin/admin-header');?>

<?php if($action == 'new') : ?>

    <div class = "col-md-6 mx-auto p-3">

    <h3>New Gallery Record</h3>

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
        </br>

        <button class = "btn btn-success my-4 float-start">Save</button>
        <a href="<?=ROOT?>/admin/gallery">
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

    <h3>Edit Gallery Record</h3>

    <?php if(!empty($errors)) : ?>
        <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
    <?php endif; ?>

    <?php if(!empty($row)) : ?>
    
        <form enctype="multipart/form-data" method = "post" class="text-center"> 

            <label>Click to change image</label> <br><br>

            <label>
            <input type="file" onchange="display_image(this.files[0], event)" name="image" class="d-none" >
            <img src="<?=get_image($row->image)?>" style="height: 300px;width: 300px;object-fit: cover; cursor: pointer;">
            </label> 
            </br>
            </br>

            <button class = "btn btn-success my-4 float-start">Save</button>
            <a href="<?=ROOT?>/admin/gallery">
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
        <a href="<?=ROOT?>/admin/gallery">
            <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
            </a>
    <?php endif;?>
    </div>


<?php elseif($action == 'delete') : ?>
 
    <div class = "col-md-6 mx-auto p-3">

        <h3>Delete Image Record</h3>

        <?php if(!empty($errors)) : ?>
            <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
        <?php endif; ?>

        <?php if(!empty($row)) : ?>
            
                
        <form method = "post" class="text-center"> 
            <div class="alert alert-danger text-center my-3">Are You sureyou want to delete this record ?</div>
            <label>Click to change image</label> <br>

            <label>
                <img src="<?=get_image($row->image)?>" style="height: 300px;width: 300px;object-fit: cover;">
            </label> </br>  </br>

                <button class = "btn btn-danger my-4 float-start">Yes</button>
                <a href="<?=ROOT?>/admin/gallery">
                    <button type = "button" class = "float-end btn btn-secondary my-4">Cancel</button>
                </a>

        </form>
        
        <?php else:?>
            
            <div class="alert alert-danger text-center">Record Not Found ! </div>
            <a href="<?=ROOT?>/admin/gallery">
                <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
                </a>
        
        <?php endif;?>

    </div>

<?php else:?>

    <h3>
        Image Gallery 
        <a href="<?=ROOT?>/admin/gallery/new">
            <button class="btn btn-primary btn-sm">
                New
            </button>
        </a>
    </h3>

    <table class="table table-striped table-bordered">

        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Image</th>
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

                    <td class="text-center">
                        <a href="<?=ROOT?>/admin/gallery/edit/<?=$row->id?>">
                                <button class="btn btn-primary mt-5 me-4">Edit</button>
                        </a>
                        
                        <a href="<?=ROOT?>/admin/gallery/delete/<?=$row->id?>">
                                <button class="btn btn-danger mt-5">Delete</button>
                        </a>
                    </td>

                </tr>
            <?php endforeach;?>
        <?php endif;?>

    </table>

<?php endif;?>

<?php $this->view('admin/admin-footer');?>