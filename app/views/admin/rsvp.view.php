<?php $this->view('admin/admin-header');?>

<?php if($action == 'delete') : ?>
 
    <div class = "col-md-6 mx-auto p-3">

        <center><h3>Delete About Record</h3></center>

        <?php if(!empty($errors)) : ?>
            <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
        <?php endif; ?>

        <?php if(!empty($row)) : ?>  
        <form method = "post" class="text-center"> 
            <div class="alert alert-danger text-center my-3">Are You sureyou want to delete this record ?</div>

            <div class="form-control my-2"><strong class="float-start">Name: </strong><?=esc($row->name)?></div>
            <div class="form-control my-2"><strong class="float-start">Email: </strong><?=esc($row->email)?></div>
            <div class="form-control my-2"><strong class="float-start">Message: </strong><?=esc($row->message)?></div>
            </br>

                <button class = "btn btn-danger my-4 float-start">Yes</button>
                <a href="<?=ROOT?>/admin/rsvp">
                    <button type = "button" class = "float-end btn btn-secondary my-4">Cancel</button>
                </a>

        </form>
        
        <?php else:?>
            
            <div class="alert alert-danger text-center">Record Not Found ! </div>
            <a href="<?=ROOT?>/admin/rsvp">
                <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
                </a>
        
        <?php endif;?>

    </div>

<?php else:?>

    <h3 class="mb-4">
        RSVP Lists 
    </h3>

    <table class="table table-striped table-bordered">

        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Attending</th>
            <th class="text-center">No of Guets to attend</th>
            <th class="text-center">Message</th>

            <th class="text-center text-da">Action</th>
        </tr>
        
        <?php if(!empty($rows)):?>
            <?php foreach($rows as $row):?>
                <tr>
            
                    <td>
                        <?=$row->id?>
                    </td>

                    <td>
                        <?=esc($row->name)?>
                    </td>
                    
                    <td>
                        <?=esc($row->email)?>
                    </td>
                    
                    <td>
                        <?=esc($row->attending)?>
                    </td>
                    
                    <td>
                       <span class="float-end">
                           <?=esc($row->guests)?>
                           </span>
                    </td>

                    <td>
                        <?=esc($row->message)?>
                    </td>

                    <td>
                        <a href="<?=ROOT?>/admin/rsvp/delete/<?=$row->id?>">
                                <button class="btn btn-danger btn-sm">Delete</button>
                        </a>
                    </td>

                </tr>
            <?php endforeach;?>
        <?php endif;?>

    </table>

<?php endif;?>

<?php $this->view('admin/admin-footer');?>