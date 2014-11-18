<?php
class C_albums extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['video'] = new C_review(1);
		
		$data['albums'] = new C_album();
		$data['albums']->order_by('id','desc')->get_page(10);
		$this->template->build('album_index',$data);
	}

	function view($id,$slug = NULL)
	{
		$data['album'] = new C_album($id);
        $data['pictures'] = new C_picture();
        $data['pictures']->where('c_album_id = ',$id)->order_by('id','desc')->get_page(12);
		$this->template->build('album_view',$data);
	}
	
	function inc_index($slug = 'main')
	{
		$data['slug'] = $slug;
		$data['category'] = new Category();
		$data['category']->get_by_slug($slug);
		$data['albums'] = new Album();
		
		if($slug=='main')
		{
			$where = '';
		}
		else
		{
			$where = ' and agency_id = '.$data['category']->id;
		}
		
		$sql = 'select albums.* 
		from albums
		where albums.id in (select album_id from pictures)
		'.$where.'
		order by id desc
		limit 3';
		
		$data['albums']->query($sql);
		$this->load->view('inc_index',$data);
	}
}
?>