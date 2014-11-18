<?php
class Agents extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index(){
        $data['agents'] = new Agent();
        $data['agents']->order_by('id','desc')->get_page(8);
        $this->template->build('index',$data);
    }
    
    function view($id){
        $data['agent'] = new Agent($id);
        $this->template->build('view',$data);
    }
}
?>