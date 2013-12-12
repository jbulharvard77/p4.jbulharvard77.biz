<?php

class announcements_controller extends base_controller {

    public function __construct() {
        parent::__construct();

    # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            die("Members only. <a href='/users/login'>Login</a>");
        }
    }

public function create() {


    # Setup view
        $this->template->content = View::instance('v_announcements_create');
        $this->template->title   = "Create Announcement";

    # Render template
        echo $this->template;
        
    }

public function existing() {


    # Setup view
        $this->template->content = View::instance('v_announcements_existing');
        $this->template->title   = "Existing Announcement";

    # Render template
        echo $this->template;
        
    }
}
