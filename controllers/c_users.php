<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup($error = NULL) {

        # Setup view
            $this->template->content = View::instance('v_users_signup');
            $this->template->title   = "Sign Up";

        # Pass data to the view
            $this->template->content->error = $error;

        # Render template
            echo $this->template;
    }

    public function p_signup() {

        # Check to see if email already exists

            $q = "SELECT email
            FROM users 
            WHERE email = '" . $_POST['email'] . "'";

            $email_dupe = DB::instance(DB_NAME)->select_field($q);
               
        #If it does produce an error       

            if($email_dupe){
                
            Router::redirect('/users/signup/email_dupe');
                
        } 

        #Otherwise proceed with sign up
               
        else {

        # Encrypt the password  
            $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);            

        # Create an encrypted token via their email address and a random string
            $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string()); 

        # Insert this user into the database
            $user = DB::instance(DB_NAME)->insert('users', $_POST);

            Router::redirect("/users/login/");
        }
    }

    public function login($error = NULL) {

        # Setup view
            $this->template->content = View::instance('v_users_login');
            $this->template->title   = "Login";

        #Pass data to the view
            $this->template->content->error = $error;


        # Render template
            echo $this->template;
    }

    public function p_login ()  {

        # Sanitize the user entered data to prevent any funny-business (re: SQL Injection Attacks)
            $_POST = DB::instance(DB_NAME)->sanitize($_POST);

        # Hash submitted password so we can compare it against one in the db
            $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

        # Search the db for this email and password
        # Retrieve the token if it's available
            $q = "SELECT token 
            FROM users 
            WHERE email = '".$_POST['email']."' 
            AND password = '".$_POST['password']."'";

            $token = DB::instance(DB_NAME)->select_field($q);

        # If we didn't find a matching token in the database, it means login failed
            if(!$token) {

        # Send them back to the login page
            Router::redirect("/users/login/error");

            }

        # But if we did, login succeeded!  
            else {

        /* 
        Store this token in a cookie using setcookie()
        Important Note: *Nothing* else can echo to the page before setcookie is called
        Not even one single white space.
        param 1 = name of the cookie
        param 2 = the value of the cookie
        param 3 = when to expire
        param 4 = the path of the cooke (a single forward slash sets it for the entire domain)
        */
            setcookie("token", $token, strtotime('+1 year'), '/');

        #Rout to profile
            Router::redirect("/users/profile/");
            
            }

        }

    public function logout()    {


        # Generate and save a new token for next login
            $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

        # Create the data array we'll use with the update method
        # In this case, we're only updating one field, so our array only has one entry
            $data = Array("token" => $new_token);

        # Do the update
            DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

        # Delete their token cookie by setting it to a date in the past - effectively logging them out
            setcookie("token", "", strtotime('-1 year'), '/');

        # Send them back to the main index.
            Router::redirect("/");

        }

    public function profile() {

        # Make sure user is logged in if they want to use anything in this controller
            if(!$this->user) {
            Router::redirect('/users/login');
        }

        # Setup view
            $this->template->content = View::instance('v_users_profile');

        # Setup title
            $this->template->title = "Profile";

        #Query to discern customers from plowers
            $q = "SELECT 
                users.user_type 
            FROM users
            WHERE user_id =". $this->user->user_id;

            $corp = DB::instance(DB_NAME)->select_field($q);              

         #Pass info to view
            $this->template->content->corp = $corp;

        # Render template
            echo $this->template;

        }

    public function plowersignup($error = NULL) {

        # Setup view
            $this->template->content = View::instance('v_users_plowersignup');
            $this->template->title   = "Sign Up";

        # Pass data to the view
            $this->template->content->error = $error;

        # Render template
            echo $this->template;

        }

    public function p_plowersignup() {

        # Check to see if email already exists

            $q = "SELECT email
            FROM users 
            WHERE email = '" . $_POST['email'] . "'";

            $email_dupe = DB::instance(DB_NAME)->select_field($q);
               
        #If it does produce an error       

            if($email_dupe){
                
            Router::redirect('/users/plowersignup/email_dupe');
                
        } 

        #Otherwise proceed with sign up
               
        else {

        # Encrypt the password  
            $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);            

        # Create an encrypted token via their email address and a random string
            $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string()); 

        # Insert this user into the database
            $user = DB::instance(DB_NAME)->insert('users', $_POST);

            Router::redirect("/users/login/");
        }
    }

    public function size()  {

        # Setup view
            $this->template->content = View::instance('v_users_size');
            $this->template->title   = "Price";

            # Render template
            echo $this->template;


    }


} #eoc