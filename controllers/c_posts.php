<?php

class posts_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
            if(!$this->user) {
                die("Members only. <a href='/users/login'>Login</a>");
        }
    }

    public function add($error = NULL) {

        # Setup view
            $this->template->content = View::instance('v_posts_add');
            $this->template->title   = "New Post";

            $this->template->content->error = $error;

        # Render template
            echo $this->template;

    }

    public function p_add() {

        #If date exists inform them of duplicate
           $q = "SELECT 
                posts.date
            FROM posts 
            WHERE date = '" . $_POST['date'] . "'
            and user_id = ".$this->user->user_id;

            $date_dupe = DB::instance(DB_NAME)->select_field($q);

            if($date_dupe)  {
                Router::redirect("/posts/add/date_dupe");
        }

        #Otherwise scedule the service
            else   {

        # Associate this post with this user
            $_POST['user_id']  = $this->user->user_id;

        # Unix timestamp of when this post was created
            $_POST['created']  = Time::now();
           
        #Query to get city
            $q = "SELECT
                users.city
                FROM users
                WHERE user_id = ".$this->user->user_id;

            $city = DB::instance(DB_NAME)->select_field($q);

            $_POST['city'] = $city;

        # Insert
            DB::instance(DB_NAME)->insert('posts', $_POST);

            Router::redirect("/posts/display/");

        }
        
    }

     public function display() {

        # Setup view
            $this->template->content = View::instance('v_posts_display');
            $this->template->title   = "Display Plow Requests";

        # Build the query
            $q = "SELECT   
                posts.date
            FROM posts
            WHERE user_id = ".$this->user->user_id;

        # Run the query
            $posts = DB::instance(DB_NAME)->select_rows($q);

        # Pass data to the View
            $this->template->content->posts = $posts;

        # Render template
            echo $this->template;

    }

    public function plowerdisplay() {

        # Setup view
            $this->template->content = View::instance('v_posts_plowerdisplay');
            $this->template->title   = "Display Plow Requests";

        # Build the query
            $q = "SELECT   
                posts.date,
                users.name,
                users.address,
                users.city,
                users.zip
            FROM posts
            INNER JOIN users
                ON posts.user_id = users.user_id
            WHERE posts.date >= SYSDATE()";

        # Run the query
            $posts = DB::instance(DB_NAME)->select_rows($q);

        # Pass data to the View
            $this->template->content->posts = $posts;

        # Render template
            echo $this->template;
    }

    public function p_plowerselect()   {

            $this->template->content->posts = $posts; 

            $where = 'WHERE post_id = '.$this->posts->post_id;

            DB::instance(DB_NAME)->insert('posts', $_POST, $where);

    }

} #eoc