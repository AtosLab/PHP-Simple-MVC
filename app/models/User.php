<?php

class User
{
    public $title = 'Login Page';

    private $listPath = 'data/users.json';

    public function getlist()
    {
    	$file = file_get_contents($this->base_url.$this->listPath);
    	$obj = json_decode($file, true);
    	return $obj;
    }

    public function addnewuser($values)
    {
        $obj = $this->getlist();
        array_push($obj, $values);

        $this->savelist($obj);
        return count($obj) - 1;
    }

    public function getuserinfo($username)
    {
    	$obj = $this->getlist();
    	foreach ($obj as $item) {
    		if($item['username'] == $username)
    		{
    			return $item;
    		}
    	}
    	return array();
    }

    public function setuserinfo($values)
    {
        $obj = $this->getlist();
        $i = 0;
        foreach ($obj as $item) {
            if($item['username'] == $values['username'])
            {
                $obj[$i]['email'] = $values['email'];
                $obj[$i]['phoneno'] = $values['phoneno'];
                $obj[$i]['address'] = $values['address'];
                $obj[$i]['description'] = $values['description'];
                $obj[$i]['avatar'] = $values['avatar'];

                break;
            }
            $i++;
        }

        $this->savelist($obj);
    }

    public function savelist($obj)
    {
        $json = json_encode($obj);
        file_put_contents($this->base_url.$this->listPath, $json);
    }

    public function verify_user($username, $userpwd)
    {
    	$obj = $this->getlist();

    	$bflag = false;
    	foreach ($obj as $item) {
    		if($item['username'] == $username && $item['password'] == $userpwd)
    		{
    			$bflag = true; 
    			break;
    		}
    	}
    	return $bflag;
    }
}