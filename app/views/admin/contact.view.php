<?php $this->view('admin/admin-header');?>


<?php if($action == 'edit') : ?>
    
    <div class = "col-md-6 mx-auto p-3">

    <h3>Edit Contact Record</h3>

    <?php if(!empty($errors)) : ?>
        <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
    <?php endif; ?>

    <?php if(!empty($row)) : ?>
        <form method = "post">

            <label for="twitter_link" class="mt-3"><strong class="text text-info"> Twitter Link : </strong></label>
                <input value="<?=old_value('twitter_link', $row->twitter_link)?>" type="text" class="form-control mb-3" name="twitter_link" placeholder="eg:- https://www.twitter.com" autofocus>
            
            <label for="facebook_link"><strong class="text text-primary"> Facebook Link :  </strong></label>
                <input value="<?=old_value('facebook_link', $row->facebook_link)?>" type="text" class="form-control mb-3" name="facebook_link" placeholder="eg:- https://www.facebook.com">
            
            <label for="instagram_link"><strong style="color:blueviolet;"> Instagram Link :  </strong></label>
                <input value="<?=old_value('instagram_link', $row->instagram_link)?>" type="text" class="form-control mb-3" name="instagram_link" placeholder="eg:- https://www.instagram.com">

            <label for="linkedin_link"><strong class="text text-info"> LinkedIn Link :  </strong></label>
                <input value="<?=old_value('linkedin_link', $row->linkedin_link)?>" type="text" class="form-control mb-3" name="linkedin_link" placeholder="eg:- https://www.linkedin.com">
            
            <label for="email"><strong class="text text-secondary"> Email Link :  </strong></label>
                <input value="<?=old_value('email', $row->email)?>" type="email" class="form-control mb-3" name="email" placeholder="eg:- example@email.com">
            
            <label for="phone"><strong class="text text-secondary"> Phone Number :  </strong></label>
                <input value="<?=old_value('phone', $row->phone)?>" type="number" class="form-control mb-3" name="phone" placeholder="(+977-9862500130) May Include country code for foregin number.">
            
            <button class = "btn btn-success my-4">Save</button>

            <a href="<?ROOT?>/admin/contact">
            <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
            </a>

        </form>

    <?php else:?>
        <div class="alert alert-danger text-center">Record Not Found ! </div>
        <a href="<?=ROOT?>/admin/contact">
            <button type = "button" class = "float-end btn btn-secondary my-4">Back</button>
            </a>
    <?php endif;?>

    </div>

<?php else:?>

    <h3>
        Contact Info and Links 
    </h3>

    <table class="table table-striped table-bordered">

        <?php if(!empty($rows)):?>
            <?php foreach($rows as $row):?>
                
                <tr>
                    <tr><th>Twitter:</th><td class="text text-secondary">   <?=    $row->twitter_link   ?>          </td></tr>
                    <tr><th>Facebook:</th><td class="text text-secondary">  <?=   $row->facebook_link   ?>          </td></tr>
                    <tr><th>Instagram:</th><td class="text text-secondary"> <?=  $row->instagram_link   ?>          </td></tr>
                    <tr><th>LinkedIn:</th><td class="text text-secondary">  <?=   $row->linkedin_link   ?>          </td></tr>
                    <tr><th>Email:</th><td class="text text-secondary">     <?=      $row->email        ?>          </td></tr>
                    <tr><th>Phone:</th><td class="text text-secondary">     <?=      $row->phone        ?>          </td></tr>
                    <th>Action</th>
                        <td class="text text-secondary">
                            <a href="<?=ROOT?>/admin/contact/edit/<?=$row->id?>">
                                <button class="btn btn-primary btn-sm me-2">Edit</button>
                            </a>
                        </td>
                </tr>
        

            <?php endforeach;?>
        <?php endif;?>

    </table>

<?php endif;?>

<?php $this->view('admin/admin-footer');?>