<?php 

/**
 * Ajax class
 */

class Ajax
{
	use Controller;

	public function index()
	{

        $info = [];
        $info['message'] ="";
        $info['errros'] = [];
        $info['success'] = false;
        
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $rsvp = new Rsvp_model;

            if($rsvp->validate($_POST))
				{

					$rsvp->insert($_POST);
                    $info['message'] = "Thank You for your message";
                    $info['success'] = true;

				}
            else
            {
                $info['errors'] = $rsvp->errors;
            }

            echo json_encode($info);
        }
    }
}    