<?php
class Reviews extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index(){
        $data['reviews'] = new Review();
        (@$_GET['category'])?$data['reviews']->where("category = '".$_GET['category']."'"):'';
        $data['reviews']->order_by('id','desc')->get_page(6);
        $this->template->build('index',$data);
    }
    
    function inc_home(){
        $data['reviews'] = new Review();
        $data['reviews']->order_by('id','desc')->get(3);
        $this->load->view('inc_home',$data);
    }
    
    function view($id){
        $data['review'] = new Review($id);
        $this->template->build('view',$data);
    }
    
    function ajax_vid($id){
        $data['review'] = new Review($id);
        $this->load->view('ajax_vid',$data);
    }
}
?>