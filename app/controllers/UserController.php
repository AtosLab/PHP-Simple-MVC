<?php

class UserController extends Controller
{
    public function index()
    {
        $user_model = $this->model('User');

        if(empty($_POST))
        {
	        $this->view('page_inc/header', ['title' => $user_model->title, 'logined' => "false"]);
	        $this->view('user/login');
	    }
	    else
	    {
	    	$username = $_POST['username'];
	    	$password = $_POST['userpwd'];
	    	if($username == "")
	    		$res['msg'] = "Input user name!";
	    	else if ($password == "")
	    		$res['msg'] = "Input password!";
	    	else {
	    		if($user_model->verify_user($username, $password))
	    		{
	    			$users = $user_model->getuserinfo($username);
	    			unset($users['password']);
	    			session_start();
					$_SESSION['userinfo'] = $users;

	    			header("Location: ". $this->base_url); /* Redirect browser */
					exit();
	    		}
	    		else
	    		{
	    			$res['msg'] = "Username or Password Invalid!";
	    		}
	    	}

	    	$this->view('page_inc/header', ['title' => $user_model->title]);
	        $this->view('user/login', ['res' => $res] );
	    }
	    $this->view('page_inc/footer');
    }

    public function signup()
    {
        $user_model = $this->model('User');

        if(empty($_POST))
        {
            $this->view('page_inc/header', ['title' => $user_model->title, 'logined' => "false"]);
            $this->view('user/signup');
        }
        else
        {
            $obj['username'] = $_POST['username'];
            $obj['userpwd'] = $_POST['userpwd'];
            $obj['email'] = $_POST['email'];
            $obj['phoneno'] = $_POST['phoneno'];
            $obj['address'] = $_POST['address'];
            $obj['avatar'] = $_POST['avatar'];
            $obj['description'] = $_POST['description'];

            if($obj['username'] == "")
                $res['msg'] = "Input user name!";
            else if ($obj['userpwd'] == "")
                $res['msg'] = "Input password!";
            else if ($obj['email'] == "")
                $res['msg'] = "Input email!";
            else {
                if(!empty($user_model->getuserinfo($obj['username'])))
                {
                    $res['msg'] = "Username already exist!";
                }
                else if($user_model->addnewuser($obj))
                {
                    $users = $user_model->getuserinfo($obj['username']);
                    unset($users['password']);
                    session_start();
                    $_SESSION['userinfo'] = $users;

                    header("Location: ". $this->base_url); /* Redirect browser */
                    exit();
                }
                else
                {
                    $res['msg'] = "Signup error!";
                }
            }

            $this->view('page_inc/header', ['title' => $user_model->title]);
            $this->view('user/signup', ['res' => $res] );
        }
        $this->view('page_inc/footer');
    }

    public function logout()
    {
    	session_start();
		session_destroy();
    	header("Location: ". $this->base_url);
    	exit();
    }

    public function profile()
    {
    	session_start();
        if (!isset($_SESSION['userinfo']))
        {
            header("Location: ". $this->base_url); /* Redirect browser */
            exit();
        }

    	$user_model = $this->model('User');
    	if(!empty($_POST)){
    		$obj['username'] = $_SESSION['userinfo']['username'];
    		$obj['email'] = $_POST['email'];
    		$obj['phoneno'] = $_POST['phoneno'];
    		$obj['address'] = $_POST['address'];
    		$obj['description'] = $_POST['description'];
    		$obj['avatar'] = $_POST['avatar'];

    		$user_model->setuserinfo($obj);
    	}

    	$user_info = $user_model->getuserinfo($_SESSION['userinfo']['username']);

    	$this->view('page_inc/header', ['title' => "User Profile", 'logined' => "true"]);
    	$this->view('user/profile', ['user_info' => $user_info, 'readmode' => "read"]);
    	$this->view('page_inc/footer');
    }
}