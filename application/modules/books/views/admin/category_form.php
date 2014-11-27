<h1>หมวดหมู่หนังสือ</h1>
<form id="frmMain" action="books/admin/categories/save/<?php echo $category->id ?>" method="post" enctype="multipart/form-data" >
	
<table class="form">
	<tr>
		<th>ชื่อหมวดหมู่ :</th>
		<td>
			<input type="text" name="name" value="<?php echo $category->name?>" class="full" />
		</td>
	</tr>
	<tr><th></th><td><input type="submit" value="บันทึก" /><?php echo form_back() ?></td></tr>
</table>
<?php echo form_referer() ?>
</form>