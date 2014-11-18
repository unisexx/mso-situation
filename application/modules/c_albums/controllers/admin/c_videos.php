<?php
class C_videos extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function form($id=FALSE)
	{
		$data['review'] = new C_review($id);
		$this->template->build('admin/c_video_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$review = new C_review($id);
            $_POST['slug'] = clean_url($_POST['title']['cn']);
            $_POST['title'] = lang_encode($_POST['title']);
            // $_POST['detail'] = lang_encode($_POST['detail']);
			if(!$id)$_POST['user_id'] = $this->session->userdata('id');
			if($_FILES['image']['name'])
			{
				$review->image = $review->upload($_FILES['image'],'uploads/c_review/',261,167);
			}
			$review->from_array($_POST);
			$review->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect("c_albums/admin/c_videos/form/1");
	}
}
?>