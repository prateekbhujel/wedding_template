<?php 


/**
 * Event_model class
 */
class Event_model
{
	
	use Model;

	protected $table = 'event';

	protected $allowedColumns = [

		'image',
        'title',
        'location',
        'time',
        'list_order',
	];

	public function validate($files_data, $post_data, $id = null)
	{
		$this->errors = [];

        $allowed_types = [
            
            'image/jpeg',
            'image/png',
            'image/gif',
            'image/webp'

        ];
        if(!$id)
        {
            if(empty($files_data['image']['name']))
            {
                $this->errors['image'] = "An Image is Required.";
            }else
            {
    
                if(!in_array($files_data['image']['type'], $allowed_types))
                {
                    $this->errors['image'] = "Only files of this type are allowed: ". implode(", ", $allowed_types);
                }
            }
        }else
        {
            if(!empty($files_data['image']['name']))
            {
                if(!in_array($files_data['image']['type'], $allowed_types))
                {
                    $this->errors['image'] = "Only files of this type are allowed:". implode(", ", $allowed_types);
                }
            }
        }
        if(empty($post_data['title']))
        {
            $this->errors['title'] = "A Title is Required !";
        }
        if(empty($post_data['location']))
        {
            $this->errors['location'] = "An location is Required !";
        }
        if(empty($post_data['time']))
        {
            $this->errors['name'] = "A Time is Required !";
        }
		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
	
	public function create_table ()
	{
		
        $query = "create table if not exists event(

			id int primary key auto_increment,
            title varchar(50) not null,
            location varchar(50) not null,
            time  int(50) not null,
            image varchar(1024) null,
            list_order int default 0
		
        )";
    
		$this->query($query);

	}
}