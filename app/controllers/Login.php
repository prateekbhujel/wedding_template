<?php 

/**
 * login class
 */
class Login
{
	use Controller;

	public function index()
	{

		$data['errors'] = [];

		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$user = new User;
			$row = $user->first(['email'=>$_POST['email']]);

			if($row)
			{
				if(password_verify($_POST['password'], $row->password))
				{	
					$user->authenticate($row);
					redirect('admin');
				}
			}

			$data['errors']['email'] = "Wrong email or password!";
		}

		$this->view('login', $data);
	}

}
