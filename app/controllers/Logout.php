<?php 

/**
 * logout class
 */
class Logout    
{
	use Controller;

	public function index()
	{
        $user = new User;
		$user->logout();
		
		redirect('login');
	}

}
