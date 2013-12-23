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

        #Query to find dupe date
           $q = "SELECT 
                posts.date
            FROM posts 
            WHERE date = '" . $_POST['date'] . "'
            and user_id = ".$this->user->user_id;

            $date_dupe = DB::instance(DB_NAME)->select_field($q);

            #variable for current date
            $current_date = gmDate("Y-m-d"); 

            #if date is a duplicate produce an error
            if($date_dupe)  {
                Router::redirect("/posts/add/date_dupe");
            }

            #if date is less than today produce an error 
            elseif(($_POST['date']) < $current_date)   {
                Router::redirect("/posts/add/wrong_date");
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

        # Build the query to get posts
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
                posts.post_id,   
                posts.date,
                users.*
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


     public function p_email($post_id = NULL)   {

            $this->template->content = View::instance('v_posts_email');
            $this->template->content->post_id = $post_id;

            $q = "SELECT
                posts.post_id,   
                posts.date,
                users.*
            FROM posts
            INNER JOIN users
                ON posts.user_id = users.user_id
            WHERE posts.post_id = ".$post_id;

            $posts = DB::instance(DB_NAME)->select_rows($q);

            $this->template->content->posts = $posts;
                
            echo $this->template;

            
    }

} #eoc