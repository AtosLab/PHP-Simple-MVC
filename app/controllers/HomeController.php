<?php

class HomeController extends Controller
{
    public function index()
    {
        $home_model = $this->model('Home');
        $result = $home_model->getlist();

        session_start();
        if (isset($_SESSION['userinfo']))
        {
        	$this->view('page_inc/header', ['title' => $home_model->title, 'logined' => "true"]);
        	$this->view('inspired', ['result' => $result]);
        }
        else
        {
        	$this->view('page_inc/header', ['title' => $home_model->title, 'logined' => "false"]);
        	$this->view('home', ['result' => $result]);
        }
        $this->view('page_inc/footer');
    }

    public function details($list_id = 0)
    {
        session_start();
        if (!isset($_SESSION['userinfo']))
        {
            header("Location: ". $this->base_url); /* Redirect browser */
            exit();
        }

        $home_model = $this->model('Home');
        $this->view('page_inc/header', ['title' => $home_model->title, 'logined' => "true"]);

        $result = $home_model->getitembyid($list_id[0]);
        $result['nIndex'] = $list_id[0];
        $this->view('details', ['result' => $result]);

        $this->view('page_inc/footer');
    }

    public function detailsdo()
    {
        $nIndex = $_POST['id'];
        $pData = $_POST['dtext'];

        $home_model = $this->model('Home');
        $res['repostedby'] = $home_model->editdatabyid($nIndex, $pData);

        $res['msg'] = "success";
        $res['dtext'] = $pData;
        echo json_encode($res);
    }

    public function adddetails()
    {
        session_start();
        if (!isset($_SESSION['userinfo']))
        {
            header("Location: ". $this->base_url); /* Redirect browser */
            exit();
        }

        $home_model = $this->model('Home');
        $this->view('page_inc/header', ['title' => $home_model->title, 'logined' => "true"]);
        if(empty($_POST)){
            $this->view('newdetails');
        }
        else
        {
            $obj['img_url'] = $_POST['img_url'];
            $obj['reposted_by'] = "@".$_SESSION['userinfo']['username'];
            $obj['reposted_text'] = $_POST['reposted_text'];
            $obj['posted_url'] = $_POST['posted_url'];
            $obj['contents'] = $_POST['contents'];
            $obj['posted_by'] = $_POST['posted_by'];
            $obj['original_url'] = $_POST['original_url'];
            $obj['original_by'] = "Original Post";
            
            $new_id = $home_model->addnew($obj);

            header("Location: ". $this->base_url.'home/details/'.$new_id);
            exit();
        }
        $this->view('page_inc/footer');
    }
}