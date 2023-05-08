<?php $this->view('admin/admin-header');?>

<?php if($action == 'new') : ?>

    <div class = "col-md-6 mx-auto p-3">

    <center><h3>New Story Record</h3></center>

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

        <input type="date" value="<?=old_value('date')?>" name="date" class="form-control mt-3 mb-3" placeholder="2023-04-04">
        
        <textarea name="description" rows="8" class="form-control mb-3" placeholder="Type Story Description here ... "><?=old_value('description')?></textarea>
        
        <hr>
        
        <label class="text-start d-block text-secondary">List Order:</label>
            <input type="number" min="0" value="<?=old_value('list_order', 0)?>" name="list_order" class="form-control mb-3 mb-3">
        
        </br>
        <button class = "btn btn-success my-4 float-start">Save</button>
       
        <a href="<?=ROOT?>/admin/story">
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

    <center><h3>Edit Story Record</h3></center>

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

            <input type="date" value="<?=old_value('date', $row->date)?>" name="date" id = "myDate" class="form-control mt-3 mb-3" placeholder="2023-04-04">

            <textarea name="description" rows="8" class="form-control mb-3" placeholder="About"><?=old_value('description',$row->description)?></textarea>


            <hr>

            <label class="text-start d-block text-secondary">List Order:</label>
                <input type="number" min="0" value="<?=old_value('list_order', $row->list_order)?>" name="list_order" class="form-control mb-3 mb-3">

            </br>
            <button class = "btn btn-success my-4 float-start">Save</button>

            <a href="<?=ROOT?>/admin/story">
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

            document.querySelector("#myDate").valueAsDate = new Date('<?= old_value('date',$row->date)?>');
        </script>
    
    <?php else:?>
        <div class="alert alert-danger text-center">Record Not Found ! </div>
        <a href="<?=ROOT?>/admin/story">
            <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
            </a>
    <?php endif;?>
    </div>


<?php elseif($action == 'delete') : ?>
 
    <div class = "col-md-6 mx-auto p-3">

        <center><h3>Delete Story Record</h3></center>

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
                <a href="<?=ROOT?>/admin/story">
                    <button type = "button" class = "float-end btn btn-secondary my-4">Cancel</button>
                </a>

        </form>
        
        <?php else:?>
            
            <div class="alert alert-danger text-center">Record Not Found ! </div>
            <a href="<?=ROOT?>/admin/story">
                <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
                </a>
        
        <?php endif;?>

    </div>

<?php else:?>

    <h3>
        Story Records 
        <a href="<?=ROOT?>/admin/story/new">
            <button class="btn btn-primary btn-sm">
                New
            </button>
        </a>
    </h3>

    <table class="table table-striped table-bordered">

        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Image</th>
            <th class="text-center">Story Title</th>
            <th class="text-center">Description</th>
            <th class="text-center">Date</th>
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
                        <?=esc($row->description)?>
                    </td>

                    <td>
                        <?=get_date($row->date)?>
                    </td>

                    <td>
                        <?=esc($row->list_order)?>
                    </td>
                    <td>
                        <a href="<?=ROOT?>/admin/story/edit/<?=$row->id?>">
                                <button class="btn btn-primary btn-sm d-block mb-1 mt-1">Edit</button>
                        </a>
                        
                        <a href="<?=ROOT?>/admin/story/delete/<?=$row->id?>">
                                <button class="btn btn-danger btn-sm">Delete</button>
                        </a>
                    </td>

                </tr>
            <?php endforeach;?>
        <?php endif;?>

    </table>

<?php endif;?>

<?php $this->view('admin/admin-footer');?>