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
		$data['books'] = $book->where('status = "approve"')->order_by('orderlist','desc')->get();
		
		$category = new Category();
		$data['categories'] = $category->order_by('name asc')->get();
		$this->load->view('index',$data);
	}
	
	function view(){
		$book = new Book();
		if(@$_GET['category']){ $book->where('category_id = '.$_GET['category']); }
		$data['books'] = $book->where('category_id = 9 or category_id = 8 and status = "approve"')->order_by('orderlist','desc')->get();
		
		$category = new Category();
		$data['categories'] = $category->order_by('name asc')->get();
		$this->load->view('view',$data);
	}
	
	function view2(){
		$book = new Book();
		if(@$_GET['category']){
			$data['books'] = $book->where('category_id = '.$_GET['category'])->order_by('orderlist','desc')->get();
		}else{
			$data['books'] = $book->where('category_id = 9 or category_id = 8 or category_id = 11 or category_id = 12 and status = "approve"')->order_by('orderlist','desc')->get();
		}
		
		$category = new Category();
		$data['categories'] = $category->where('id = 9 or id = 8 or id = 11 or id = 12')->order_by('name asc')->get();
		$this->load->view('view2',$data);
	}
	
	function counter(){
		$book = new Book($_GET['id']);
		$book->counter();
		// $book->check_last_query();
	}
}
?>