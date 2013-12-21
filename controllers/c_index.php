<?php

class index_controller extends base_controller {
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
	} 
		
	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/index/
	-------------------------------------------------------------------------------------------------*/
	public function index($type = NULL) {

		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_index_index');
			
		# Now set the <title> tag
			$this->template->title = "Welcome";

		#Pass data to the view
			$this->template->content->type = $type;

		#Query to pull discern customers from plowers
            $q = "SELECT user_type 
            FROM users
            WHERE users.user_type = 'customer'";

            $customer = DB::instance(DB_NAME)->select_field($q);

        #If a customer route here
                if ($customer) {
                    Router::redirect("/users/profile/customer");
                }

        #If a plower route here
                else  {
                    Router::redirect("/users/profile/plower");
				}
		# CSS/JS includes
			/*
			$client_files_head = Array("");
	    	$this->template->client_files_head = Utils::load_client_files($client_files);
	    	
	    	$client_files_body = Array("");
	    	$this->template->client_files_body = Utils::load_client_files($client_files_body);   
	    	*/
	      					     		
		# Render the view
			echo $this->template;


	} # End of method
	
	
} # End of class
