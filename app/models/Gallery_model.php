<?php 


/**
 * Gallery_model class
 */
class Gallery_model
{
	
	use Model;

	protected $table = 'gallery';

	protected $allowedColumns = [

		'image'
	];

	public function validate($data, $id = null)
	{
		$this->errors = [];

        $allowed_types = [
            
            'image/jpeg',
            'image/png',
            'image/gif',
            'image/webp'

        ];

        if(empty($data['image']['name']))
        {
            $this->errors['image'] = "An Image is Required.";
        }else
        {

            if(!in_array($data['image']['type'], $allowed_types))
            {
                $this->errors['image'] = "Only files of this type are allowed: ". implode(", ", $allowed_types);
            }
        }
		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
	
	public function create_table ()
	{
		
        $query = "create table if not exists gallery(

			id int primary key auto_increment,
            image varchar(1024) null
		
        )";
    
		$this->query($query);

	}
}