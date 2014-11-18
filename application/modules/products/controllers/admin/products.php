<?php
class Products extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['products'] = new Product();
		// if(@$_GET['search'])$data['Products']->where("title like '%".$_GET['search']."%'");
		// if(@$_GET['status'])$data['Products']->where('status',$_GET['status']);
		// if(@$_GET['category_id'])$data['Products']->where("category_id = ".$_GET['category_id']);
		$data['products']->order_by('id','desc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['product'] = new Product($id);
		$this->template->append_metadata(js_datepicker());
		$this->template->build('admin/form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$product = new Product($id);
            $_POST['slug'] = clean_url($_POST['title']['th']);
            $_POST['title'] = lang_encode($_POST['title']);
            $_POST['detail'] = lang_encode($_POST['detail']);
			if(!$id)$_POST['user_id'] = $this->session->userdata('id');
			$product->from_array($_POST);
			$product->save();
			
			fix_file($_FILES['image']);
            foreach($_FILES['image'] as $key => $image)
            {
                $picture = new Product_picture(@$_POST['picture_id'][$key]);
                if($image['name'])
                {
                    // if(@$_POST['picture_id'][$key])
                    // {
                        // $picture->delete_file('uploads/product/'.$product->id,'image');
                        // $picture->delete_file('uploads/product/thumbnail/'.$product->id,'image');
                    // }
                    // if(@$_POST['watermark'])
                    // {
                        // $picture->watermark($_POST['watermark'], $_POST['position']);
                    // }
                    $picture->image = $picture->upload($image,'uploads/product/'.$product->id);
                    $picture->thumb('uploads/product/'.$product->id.'/thumbnail',275,180); 
                    $picture->product_id = $product->id;
                    $picture->save();
                }   
            }
            
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function approve($id)
	{
		if($_POST)
		{
			$Product = new Product($id);
			$_POST['approve_id'] = $this->session->userdata('id');
			$Product->approve_date = date("Y-m-d H:i:s");
			$Product->from_array($_POST);
			$Product->save();
			echo approve_comment($Product);
		}

	}
	
	function delete($id=FALSE)
	{
		if($id)
		{
			$product = new Product($id);
            remove_dir('uploads/product/'.$product->id);
            $product->product_picture->delete_all();
			$product->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}

    function delete_picture($id)
    {
        if($id)
        {
            $picture = new Product_picture($id);
            // $picture->delete_file('uploads/albums/'.$album->id,'image');
            // $picture->delete_file('uploads/albums/thumbnail/'.$album->id,'image');
            $picture->delete();
        }
    }
}
?>