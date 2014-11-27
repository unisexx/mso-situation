<?php
class Books extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index(){
		$book = new Book();
		if(@$_GET['category']){ $book->where('category_id = '.$_GET['category']); }
		$data['books'] = $book->where('status = "approve"')->order_by('orderlist','asc')->get();
		
		$category = new Category();
		$data['categories'] = $category->order_by('name asc')->get();
		$this->load->view('index',$data);
	}
	
	function counter(){
		$book = new Book($_GET['id']);
		$book->counter();
		// $book->check_last_query();
	}
}
?>