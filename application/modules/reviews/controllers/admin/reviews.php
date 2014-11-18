<?php
class Reviews extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['reviews'] = new Review();
		// if(@$_GET['search'])$data['bnews']->where("title like '%".$_GET['search']."%'");
		// if(@$_GET['status'])$data['bnews']->where('status',$_GET['status']);
		// if(@$_GET['category_id'])$data['bnews']->where("category_id = ".$_GET['category_id']);
		$data['reviews']->order_by('id','desc')->get_page();
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['review'] = new Review($id);
		$this->template->build('admin/form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$review = new Review($id);
            $_POST['slug'] = clean_url($_POST['title']['th']);
            $_POST['title'] = lang_encode($_POST['title']);
            // $_POST['detail'] = lang_encode($_POST['detail']);
			if(!$id)$_POST['user_id'] = $this->session->userdata('id');
			if($_FILES['image']['name'])
			{
				$review->image = $review->upload($_FILES['image'],'uploads/review/',261,167);
			}
			$review->from_array($_POST);
			$review->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function approve($id)
	{
		if($_POST)
		{
			$review = new Review($id);
			$_POST['approve_id'] = $this->session->userdata('id');
			$review->approve_date = date("Y-m-d H:i:s");
			$review->from_array($_POST);
			$review->save();
			echo approve_comment($review);
		}

	}
	
	function delete($id=FALSE)
	{
		if($id)
		{
			$review = new Review($id);
			$review->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>