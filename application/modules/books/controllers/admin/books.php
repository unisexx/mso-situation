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
        if(@$_GET['title'])$data['books']->where("title like '%".$_GET['title']."%'");
        if(@$_GET['category_id'])$data['books']->where('category_id',$_GET['category_id']);
		$data['books']->order_by('orderlist','desc')->get_page();
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
			
			$sql = "select max(id) id from books limit 1";
        	$max = $this->db->query($sql)->row_array();
			$_POST['orderlist'] = $max['id']*10;
			
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
	
	function save_orderlist($id=FALSE){
        if($_POST)
        {
                foreach($_POST['orderlist'] as $key => $item)
                {
                    if($item)
                    {
                        $book = new Book(@$_POST['orderid'][$key]);
                        $book->from_array(array('orderlist' => $item));
                        $book->save();
                    }
                }
            set_notify('success', lang('save_data_complete'));
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
}
?>