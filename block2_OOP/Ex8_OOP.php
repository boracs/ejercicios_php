<?php
class FileChecker{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function checkFile(){
        if(!file_exists($this->name)){
            throw new Exception("The file doesn't exist");
        }else{
            return true;
        }
    }
}

$fc = new FileChecker("jkgkj.txt");
try{
    $fc->checkFile();
    echo "Exists!!";
}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}