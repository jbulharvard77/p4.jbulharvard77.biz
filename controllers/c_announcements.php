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

public function save()  {

# Setup view
        $this->template->content = View::instance('v_announcements_save');
        $this->template->title   = "Save Announcement";
        
        $this->template->content->chosen_color = $chosen_color;
        $this->template->content->gender = $gender;
        $this->template->content->f_name = $f_name;
        $this->template->content->l_name = $l_name;
        $this->template->content->mess = $mess;

    # Render template
        echo $this->template;
    }
        
public function p_save()  {

    # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;

        $_POST['chosen_color']  = $this->user->user_id->$chosen_color;

        $_POST['gender']  = $this->user->user_id->$gender;

        $_POST['f_name']  = $this->user->user_id->$f_name;

        $_POST['l_name']  = $this->user->user_id->$l_name;

        $_POST['mess']  = $this->user->user_id->$mess;

        # Insert
        DB::instance(DB_NAME)->insert('announcements', $_POST);

        echo "saved the announcement, need to update this";

    }





}
