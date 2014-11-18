<?php
class C_albums extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
		ini_set('memory_limit', '-1');
	}
	
	function index()
	{
		$data['albums'] = new C_album();
		$data['albums']->order_by('id','desc')->get_page();
		//$data['albums']->where('agency_id',$_GET['agency_id'])->order_by('id','desc')->get_page();
		$this->template->build('admin/index',$data);
	}
	
	function form($id = NULL)
	{	
		$data['album'] = new C_album($id);
		$this->template->append_metadata(js_lightbox());
        $this->template->append_metadata(js_datepicker());
		$this->template->build('admin/form',$data);	
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$album = new C_album($id);
            $_POST['actdate'] = Date2DB($_POST['actdate']);
			$album->user_id = $this->session->userdata('id');
            $_POST['name'] = lang_encode($_POST['name']);
			$album->from_array($_POST);
			$album->save();
			
			fix_file($_FILES['image']);
			foreach($_FILES['image'] as $key => $image)
			{
				$picture = new C_picture(@$_POST['picture_id'][$key]);
				if($image['name'])
				{
					// if(@$_POST['picture_id'][$key])
					// {
						// $picture->delete_file('uploads/albums/'.$album->id,'image');
						// $picture->delete_file('uploads/albums/thumbnail/'.$album->id,'image');
					// }
					// if(@$_POST['watermark'])
					// {
						// $picture->watermark($_POST['watermark'], $_POST['position']);
					// }
					$picture->title = @$_POST['title'][$key];
					$picture->image = $picture->upload($image,'uploads/c_albums/'.$album->id);
					$picture->thumb('uploads/c_albums/'.$album->id.'/thumbnail',275,180);	
					$picture->c_album_id = $album->id;
					$picture->save();
				}	
			}
            
            if($_POST['picture_id']){
                foreach($_POST['picture_id'] as $key=>$id){
                    $picture = new C_picture($id);
                    $picture->title = @$_POST['title'][$key];
                    $picture->save();
                }
            }
            
			set_notify('success', lang('save_data_complete'));
		}
		redirect('c_albums/admin/c_albums/form/'.$album->id);
	}
	
	function delete($id)
	{
		if($id)
		{
			$album = new C_album($id);
			remove_dir('uploads/c_albums/'.$album->id);
			$album->c_picture->delete_all();
			$album->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function delete_picture($id)
	{
		if($id)
		{
			$picture = new C_picture($id);
			// $picture->delete_file('uploads/albums/'.$album->id,'image');
			// $picture->delete_file('uploads/albums/thumbnail/'.$album->id,'image');
			$picture->delete();
		}
	}
	
	function category_save($id = NULL)
	{
		$category = new C_album_category($id);
		$category->from_array($_POST);
		$category->save();
		echo form_dropdown('c_album_category_id',get_option('id','name','album_categories'),$category->id);
	}
	
	function category_delete($id)
	{
		$category = new C_album_category($id);
		$category->delete();
		echo form_dropdown('c_album_category_id',get_option('id','name','album_categories'));
	}
	
}
?>