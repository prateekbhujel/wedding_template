<?php $this->view('admin/admin-header');?>
   
    <h3 class="p-4 ">Dashboard</h3>

        <div class="row">
            
            <div class="p-2 m-4 shadow text-center col-md-3 border rounded">
                <i class="text-primary fs-1 fa fa-users"></i>
                <h3>Users</h3>
                <h4><?=$total_users->total?></h4>
            </div>
           
            <div class="p-2 m-4 shadow text-center col-md-3 border rounded">
                <i class="text-primary fs-1 fa fa-images"></i>
                <h3>Gallery Images</h3>
                <h4><?=$total_images->total?></h4>
            </div>
           
            <div class="p-2 m-4 shadow text-center col-md-3 border rounded">
                <i class="text-primary fs-1 fa fa-envelope"></i>
                <h3>RSVP Count</h3>
                <h4><?=$total_rsvps->total?></h4>
            </div>
            
            <div class="p-2 m-4 shadow text-center col-md-3 border rounded">
                <i class="text-primary fs-1 fa fa-gear"></i>
                <h3>Total No. Settings</h3>
                <h4><?=$total_settings->total?></h4>
            </div>
        
        </div>
<?php $this->view('admin/admin-footer');?>