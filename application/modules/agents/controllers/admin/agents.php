<?php
class Agents extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['agents'] = new Agent();
		// if(@$_GET['code'])$data['agents']->where("code like '%".$_GET['code']."%'");
		// if(@$_GET['company'])$data['agents']->where("company like '%".$_GET['company']."%'");
		// if(@$_GET['category_id'])$data['agents']->where("category_id = ".$_GET['category_id']);
		$data['agents']->order_by('id','desc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['agent'] = new Agent($id);
		$this->template->append_metadata(js_datepicker());
		$this->template->build('admin/form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$agent = new Agent($id);
            $_POST['slug'] = clean_url($_POST['name']['th']);
            // $_POST['company'] = lang_encode($_POST['company']);
            $_POST['name'] = lang_encode($_POST['name']);
            $_POST['address'] = lang_encode($_POST['address']);
            // $_POST['record'] = lang_encode($_POST['record']);
			// if(!$id)$_POST['user_id'] = $this->session->userdata('id');
			// if($_FILES['image']['name'])
			// {
				// if($id)$agent->delete_file($agent->id,'uploads/agent/thumbnail','image');
				// $agent->image = $agent->upload($_FILES['image'],'uploads/agent/');
			// }
			$agent->from_array($_POST);
			$agent->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function approve($id)
	{
		if($_POST)
		{
			$agent = new Agent($id);
			$_POST['approve_id'] = $this->session->userdata('id');
			$agent->approve_date = date("Y-m-d H:i:s");
			$agent->from_array($_POST);
			$agent->save();
			echo approve_comment($agent);
		}

	}
	
	function delete($id=FALSE)
	{
		if($id)
		{
			$agent = new Agent($id);
			$agent->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>