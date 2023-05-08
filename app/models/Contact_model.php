<?php 


/**
 * Contact_model class
 */
class Contact_model
{
	
	use Model;

	protected $table = 'contact_table';

	protected $allowedColumns = [

		'twitter_link',
		'facebook_link',
		'instagram_link',
		'linkedin_link',
		'email',
		'phone',
	];

	public function validate($data, $id = null)
	{
		$this->errors = [];


		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
	
	public function create_table ()
	{
		$query = "create table if not exists contact_table(

			id int primary key auto_increment,
            twitter_link varchar(1024) null,
            facebook_link varchar(1024) null,
            instagram_link varchar(1024) null,
            linkedin_link varchar(1024) null,
            email varchar(100) null,
            phone varchar(15) null
		)";

		$this->query($query);

        $query = "insert into $this->table (twitter_link) values ('')";

		$this->query($query);

	}
}