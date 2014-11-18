<?php
class Products extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index(){
        $data['products'] = new Product();
        $data['products']->order_by('id','desc')->get_page(6);
        $this->template->build('index',$data);
    }
    
    function inc_home(){
        $data['products'] = new Product();
        $data['products']->order_by('id','desc')->get(3);
        $this->load->view('inc_home',$data);
    }
    
    function view($id){
        $data['product'] = new Product($id);
        $this->template->build('view',$data);
    }
    
    function getImg(){
        if($_POST){
            $picture = new Product_picture($_POST['id']);
            $this->output->set_output("<img src='uploads/product/".$picture->product_id."/".$picture->image."' width='277' height='203'>");
        }
    }
}
?>