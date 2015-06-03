<?php 

namespace Models;
use Resources;

class Url_m{
	function __construct(){
		$this->database = new Resources\Database;
	}

	function random($data){
		$query=$this->database->insert('urls',$data);
		if($query){
			return true;
		}else{
			return false;
		}
	}
    
    function getUrl($id){
        $result=$this->database->select()->where('id','=',$id)->from('urls')->getAll();
        return $result[0]->target;
    } 
}