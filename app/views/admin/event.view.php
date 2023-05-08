<?php $this->view('admin/admin-header');?>

<?php if($action == 'new') : ?>

    <div class = "col-md-6 mx-auto p-3">

    <center><h3>New Events Record</h3></center>

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
        
        <input type="text" value="<?=old_value('title')?>" name="title" class="form-control mt-3 mb-3" placeholder="The Reception Party's">
        <input type="text" value="<?=old_value('location')?>" name="location" class="form-control mt-3 mb-3" placeholder="Biratnagar, Bargachhi, Kanchanjunga">
        <input type="text" value="<?=old_value('time')?>" name="time" class="form-control mt-3 mb-3" placeholder="12::00 PM - 13:00 PM">
        <hr>
        <label class="text-start d-block text-secondary">List Order:</label>
            <input type="number" min="0" value="<?=old_value('list_order', 0)?>" name="list_order" class="form-control mb-3 mb-3">
        
        </br>
        <button class = "btn btn-success my-4 float-start">Save</button>
       
        <a href="<?=ROOT?>/admin/event">
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

    <center><h3>Edit Event Record</h3></center>

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
            <input type="text" value="<?=old_value('title', $row->title)?>" name="title" class="form-control mt-3 mb-3" placeholder="The Reception Party's">
            <input type="text" value="<?=old_value('location', $row->location)?>" name="location" class="form-control mt-3 mb-3" placeholder="Biratnagar, Bargachhi, Kanchanjunga">
            <input type="text" value="<?=strtoupper(old_value('time',$row->time))?>" name="time" class="form-control mt-3 mb-3" placeholder="12:00 PM - 1:00 PM">
        <hr>
        <label class="text-start d-block text-secondary">List Order:</label>
            <input type="number" min="0" value="<?=old_value('list_order', $row->list_order)?>" name="list_order" class="form-control mb-3 mb-3">
        
            </br>
            <button class = "btn btn-success my-4 float-start">Save</button>

            <a href="<?=ROOT?>/admin/event">
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
        <a href="<?=ROOT?>/admin/event">
            <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
            </a>
    <?php endif;?>
    </div>


<?php elseif($action == 'delete') : ?>
 
    <div class = "col-md-6 mx-auto p-3">

        <center><h3>Delete Event Record</h3></center>

        <?php if(!empty($errors)) : ?>
            <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
        <?php endif; ?>

        <?php if(!empty($row)) : ?>  
        <form method = "post" class="text-center"> 
            <div class="alert alert-danger text-center my-3">Are You Sure You Want To Delete This Record ?</div>
            <label>
                <img src="<?=get_image($row->image)?>" style="height: 300px;width: 300px;object-fit: cover;">
            </label> 
        
            <div class="form-control my-2"><?=esc($row->title)?></div>
            </br>

                <button class = "btn btn-danger my-4 float-start">Yes</button>
                <a href="<?=ROOT?>/admin/event">
                    <button type = "button" class = "float-end btn btn-secondary my-4">Cancel</button>
                </a>

        </form>
        
        <?php else:?>
            
            <div class="alert alert-danger text-center">Record Not Found ! </div>
            <a href="<?=ROOT?>/admin/event">
                <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
                </a>
        
        <?php endif;?>

    </div>

<?php else:?>

    <h3>
        Events Records 
        <a href="<?=ROOT?>/admin/event/new">
            <button class="btn btn-primary btn-sm">
                New
            </button>
        </a>
    </h3>

    <table class="table table-striped table-bordered">

        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Image</th>
            <th class="text-center">Event Title</th>
            <th class="text-center">Event's Location</th>
            <th class="text-center">Event Time</th>
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
                        <?=ucfirst(esc($row->title))?>
                    </td>
                    
                    <td>
                        <?=ucfirst(esc($row->location))?>
                    </td>

                    <td>
                        <?=strtoupper($row->time)?>
                    </td>                    
                    
                    <td>
                        <?=$row->list_order?>
                    </td>
                    <td>
                        <a href="<?=ROOT?>/admin/event/edit/<?=$row->id?>">
                                <button class="btn btn-primary btn-sm d-block my-1">Edit</button>
                        </a>
                        
                        <a href="<?=ROOT?>/admin/event/delete/<?=$row->id?>">
                                <button class="btn btn-danger btn-sm">Delete</button>
                        </a>
                    </td>

                </tr>
            <?php endforeach;?>
        <?php endif;?>

    </table>

<?php endif;?>

<?php $this->view('admin/admin-footer');?>