<h1>หนังสือ</h1>
<form id="frmMain" action="books/admin/books/save/<?php echo $book->id ?>" method="post" enctype="multipart/form-data" >
	
<table class="form">
	<tr>
		<th></th>
		<td>
			<?php if($book->image != ""):?><?php echo thumb("uploads/book/".$book->image,120,false,1);?><?php endif;?>
		</td>
	</tr>
	<tr><th>รูปภาพปก :</th><td><input type="file" name="image" /></td></tr>
	<tr><th>ประเภท :</th><td><?php echo form_dropdown('category_id',$book->category->get_option(),$book->category_id,'');?></td></tr>
	<tr>
		<th>ชื่อหนังสือ :</th>
		<td>
			<input type="text" name="title" rel="th" value="<?php echo $book->title?>" class="full" />
		</td>
	</tr>
	<tr>
        <th>url :</th>
        <td>
            <input type="text" name="url" rel="th" value="<?php echo $book->url?>" class="full" placeholder="http://www.google.com" />
        </td>
    </tr>
    </tr>
	<tr><th></th><td><input type="submit" value="บันทึก" /><?php echo form_back() ?></td></tr>
</table>
<?php echo form_referer() ?>
</form>