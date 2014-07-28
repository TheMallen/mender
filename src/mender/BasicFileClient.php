<?php
namespace mender;

class BasicFileClient{
    public function get($filePath)
    {
    	return  \file_get_contents($filePath);
    }
    public function put($filePath,$data)
    {
    	return \file_put_contents($filePath, $data);
    }
}
