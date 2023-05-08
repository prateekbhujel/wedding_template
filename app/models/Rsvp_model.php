<?php 


/**
 * Rsvp_model class
 */
class Rsvp_model
{
	
	use Model;

	protected $table = 'rsvp';

    
	public function validate($post_data, $id = null)
	{
		$this->errors = [];

        $allowed_types = [
            
            'image/jpeg',
            'image/png',
            'image/gif',
            'image/webp'

        ];

        if(empty($post_data['name']))
        {
            $this->errors['name'] = "A name is Required !";
        }
        if(empty($post_data['email']))
        {
            $this->errors['email'] = "A email is Required !";
        }
        if(empty($post_data['message']))
        {
            $this->errors['message'] = "A message is Required !";
        }
		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
	
	public function create_table ()
	{
		
        $query = "create table if not exists rsvp(

			id int primary key auto_increment,
            name varchar(50) not null,
            email varchar(100) not null,
            message varchar(2048) null,
            attending varchar(1024) null,
            guests int default 1 not null,
            date datetime default current_timestamp not null
		
        )";
    
		$this->query($query);

	}
}