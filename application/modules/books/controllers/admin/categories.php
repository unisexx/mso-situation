<?php
class Categories extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['categories'] = new Category();
		$data['categories']->order_by('id','desc')->get_page();
		$this->template->build('admin/category_index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['category'] = new Category($id);
		$this->template->build('admin/category_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$category = new Category($id);
			$category->from_array($_POST);
			$category->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function delete($id=FALSE)
	{
		if($id)
		{
			$category = new Category($id);
			$category->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>