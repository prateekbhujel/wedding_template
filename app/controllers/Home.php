<?php 

/**
 * home class
 */
class Home
{
	use Controller;

	public function index()
	{
		
		
		/** Contact Section **/
		$contact = new Contact_model;
		$data['links'] = $contact->first(['id'=>1]);
		
		
		
		/** Gallery Section **/
		$gallery = new Gallery_model;
		$data['gallery'] = $gallery->findAll();
		
		
		
		/** Family Section **/
		$family = new Family_model;
		$family->order_type = 'asc';
		$family->limit = 20;
		$family->order_column = 'list_order';

		$data['family'] = $family->findAll();

		
		
		/**Stories  Section*/
		$story = new Story_model;
		$story->order_type = 'asc';
		$story->limit = 20;
		$story->order_column = 'list_order';

		$data['stories'] = $story->findAll();


		
		/** About Section*/
		$about = new About_model;
		$about->order_type = 'asc';
		$about->limit = 20;
		$about->order_column = 'list_order';
		
		$data['about'] = $about->findAll();

		
		
		/** Event Section**/
		$event = new Event_model;
		$event->order_type ='asc';
		$event->limit = 4;
		$event->order_column = 'list_order';

		$data['events'] = $event->findAll();

		/** Settings Section**/
		$setting = new Setting_model;
		$setting->limit = 120;
		$data['settings'] = $setting->findAll();

		$SETTINGS =[];
		if($data['settings'])
		{
			foreach($data['settings'] as $setting_row)
			{
				$data['SETTINGS'][$setting_row->setting] = $setting_row->value;
			}
		}

		$this->view('home', $data);
	}

}
