<?php $this->view('admin/admin-header');?>

<?php if($action == 'new') : ?>

    <div class = "col-md-6 mx-auto p-3">

    <center><h3>New Family Record</h3></center>

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
        <input type="text" value="<?=old_value('name')?>" name="name" class="form-control mt-3 mb-3" placeholder="Full Name : Pratik Bhujel">
        <input type="text" value="<?=old_value('title')?>" name="title" class="form-control mt-3 mb-3" placeholder="Title : Father/Mother/Bestfriend/Sister/Brother">
        
        <label class="text-start d-block text-secondary">List Order:</label>
        <input type="number" min="0" value="<?=old_value('list_order', 0)?>" name="list_order" class="form-control mb-3 mb-3">
        
        <hr>
        <input type="text" value="<?=old_value('twitter_link')?>" name="twitter_link" class="form-control mt-3 mb-3" placeholder="Twitter Link, Leave Blank If no exists">
        <input type="text" value="<?=old_value('facebook_link')?>" name="facebook_link" class="form-control mt-3 mb-3" placeholder="Facebook Link, Leave Blank If no exists">
        <input type="text" value="<?=old_value('linkedin_link')?>" name="linkedin_link" class="form-control mt-3 mb-3" placeholder="LinkedIn Link, Leave Blank If no exists">
        <input type="text" value="<?=old_value('instagram_link')?>" name="instagram_link" class="form-control mt-3 mb-3" placeholder="Instagram Link, Leave Blank If no exists">
        </br>

        <button class = "btn btn-success my-4 float-start">Save</button>
        <a href="<?=ROOT?>/admin/family">
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

    <center><h3>Edit Family Record</h3></center>

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
            <input type="text" value="<?=old_value('name',$row->name)?>" name="name" class="form-control mt-3" placeholder="Full Name : Pratik Bhujel">
            <input type="text" value="<?=old_value('title',$row->title)?>" name="title" class="form-control mt-3 mb-3" placeholder="Title : Father/Mother/Bestfriend/Sister/Brother">
            
            <label class="text-start d-block text-secondary">List Order:</label>
            <input type="number" min="0" value="<?=old_value('list_order',$row->list_order)?>" name="list_order" class="form-control mb-3">
            
            <hr>
            <input type="text" value="<?=old_value('twitter_link', $row->twitter_link)?>" name="twitter_link" class="form-control mb-3" placeholder="Twitter Link, Leave Blank If no exists">
            <input type="text" value="<?=old_value('facebook_link', $row->facebook_link)?>" name="facebook_link" class="form-control mb-3" placeholder="Facebook Link, Leave Blank If no exists">
            <input type="text" value="<?=old_value('linkedin_link', $row->linkedin_link)?>" name="linkedin_link" class="form-control mb-3" placeholder="LinkedIn Link, Leave Blank If no exists">
            <input type="text" value="<?=old_value('instagram_link', $row->instagram_link)?>" name="instagram_link" class="form-control mb-3" placeholder="Instagram Link, Leave Blank If no exists">
            </br>
            <button class = "btn btn-success my-4 float-start">Save</button>
            <a href="<?=ROOT?>/admin/family">
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
        <a href="<?=ROOT?>/admin/family">
            <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
            </a>
    <?php endif;?>
    </div>


<?php elseif($action == 'delete') : ?>
 
    <div class = "col-md-6 mx-auto p-3">

        <center><h3>Delete Family Record</h3></center>

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
                <a href="<?=ROOT?>/admin/family">
                    <button type = "button" class = "float-end btn btn-secondary my-4">Cancel</button>
                </a>

        </form>
        
        <?php else:?>
            
            <div class="alert alert-danger text-center">Record Not Found ! </div>
            <a href="<?=ROOT?>/admin/family">
                <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
                </a>
        
        <?php endif;?>

    </div>

<?php else:?>

    <h3>
        Family Members Records 
        <a href="<?=ROOT?>/admin/family/new">
            <button class="btn btn-primary btn-sm">
                New
            </button>
        </a>
    </h3>

    <table class="table table-striped table-bordered">

        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Image</th>
            <th class="text-center">Family Member Name</th>
            <th class="text-center">Title</th>
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
                        <?=esc($row->name)?>
                    </td>
                    
                    <td>
                        <?=esc($row->title)?>
                    </td>
                    
                    <td>
                        <?=esc($row->list_order)?>
                    </td>
                    <td class="text-center">
                        <a href="<?=ROOT?>/admin/family/edit/<?=$row->id?>">
                                <button class="btn btn-primary mt-5 me-4">Edit</button>
                        </a>
                        
                        <a href="<?=ROOT?>/admin/family/delete/<?=$row->id?>">
                                <button class="btn btn-danger mt-5">Delete</button>
                        </a>
                    </td>

                </tr>
            <?php endforeach;?>
        <?php endif;?>

    </table>

<?php endif;?>

<?php $this->view('admin/admin-footer');?>