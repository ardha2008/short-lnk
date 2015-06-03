<?php
namespace Controllers;
use Resources, Models;

class Home extends Resources\Controller
{
    public function index($id=null)
    {
        if($id != null){
            $query=$this->models->url_m->getUrl($id);
            $this->redirect($query);
        }

        $data['message'] = '';
        
        if(isset($_POST['submit'])){
        	$data = array(
        		'id'	=> $this->resources->tools->getRandomString(4 ,false),
        		'target' => $this->resources->request->post('target',FILTER_SANITIZE_URL) , 
        		);
        	$q=$this->models->url_m->random($data);
        	if($q==true){
        	   $location=$this->uri->getBaseUri().'/'.$data['id'];
        		$data['message']='success';
                $data['messages'] = "<a href='$location'><strong>$location</strong></a>";
        	}else{
        		exit();
        	}
        }

        $data['title'] = 'Hello world!';
        $data['pages'] = 'home';
        $this->output('home', $data);
    }
}
