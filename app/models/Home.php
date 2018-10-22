<?php

class Home
{
    public $title = 'Home Page';

    private $listPath = 'data/data.json';

    public function getlist()
    {
    	$file = file_get_contents($this->base_url.$this->listPath);
    	$obj = json_decode($file, true);

    	return $obj;
    }

    public function getitembyid($index)
    {
        $obj = $this->getlist();
        return $obj[intval($index)];
    }

    public function editdatabyid($nIndex, $pData)
    {
        session_start();
        $obj = $this->getlist();
        $obj[intval($nIndex)]["reposted_by"] = "@".$_SESSION['userinfo']['username'];
        $obj[intval($nIndex)]["reposted_text"] = $pData;

        $this->savelist($obj);

        return "@".$_SESSION['userinfo']['username'];
    }

    public function addnew($values)
    {
        $obj = $this->getlist();
        array_push($obj, $values);

        $this->savelist($obj);
        return count($obj) - 1;
    }

    public function savelist($obj)
    {
    	$json = json_encode($obj);
    	file_put_contents($this->base_url.$this->listPath, $json);
    }
}