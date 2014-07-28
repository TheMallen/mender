<?php
namespace mender;

public interface FileClient(){
    public abstract function get($filePath);
    public abstract function put($filePath,$data);
}
