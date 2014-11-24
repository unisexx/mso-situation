<?php
class Books extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['books'] = new Book();
        if(@$_GET['title'])$data['book']->where("url title '%".$_GET['title']."%'");
        if(@$_GET['category_id'])$data['book']->where('category_id',$_GET['category_id']);
		$data['books']->order_by('id','desc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['book'] = new Book($id);
		$this->template->append_metadata(js_datepicker());
		$this->template->build('admin/form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$book = new Book($id);
            $_POST['slug'] = clean_url($_POST['title']);
			$_POST['status'] = "approve";
			if(!$id)$_POST['user_id'] = $this->session->userdata('id');
			if($_FILES['image']['name'])
			{
				if($id)$book->delete_file($book->id,'uploads/book/thumbnail','image',115,162);
				$book->image = $book->upload($_FILES['image'],'uploads/book/');
			}
			$book->from_array($_POST);
			$book->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function approve($id)
	{
		if($_POST)
		{
			$Book = new Book($id);
			$_POST['approve_id'] = $this->session->userdata('id');
			$Book->approve_date = date("Y-m-d H:i:s");
			$Book->from_array($_POST);
			$Book->save();
			echo approve_comment($Book);
		}

	}
	
	function delete($id=FALSE)
	{
		if($id)
		{
			$book = new Book($id);
			$book->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>