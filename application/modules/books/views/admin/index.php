<h1>หนังสือ</h1>
<div class="search">
	<form method="get">
		<table class="form">
			<tr><th>หัวข้อ</th><td><input type="text" name="title" value="<?php echo (isset($_GET['title']))?$_GET['title']:'' ?>" /></td>
			<th>หมวดหมู่</th><td><?php echo form_dropdown('category_id',$books->category->get_option(),@$_GET['category_id'],'','ทั้งหมด') ?></td>
			<td><input type="submit" value="ค้นหา" /></td></tr>
		</table>
	</form>
</div>
<?php echo $books->pagination()?>
<form id="order" action="books/admin/books/save_orderlist" method="post">
<table class="list">
	<tr>
		<th width="70">แสดง</th>
		<th>ลำดับที่</th>
		<th>รูปภาพปก</th>
		<th>หัวข้อ</th>
		<th>url</th>
		<th>เปิดอ่าน</th>
		<th>หมวดหมู่</th>
		<th width="90">
			<a class="btn" href="books/admin/books/form">เพิ่มรายการ</a>
		</th>
	</tr>
	<?php foreach($books as $row): ?>
	<tr <?php echo cycle()?>>
		<td><input type="checkbox" name="status" value="<?php echo $row->id ?>" <?php echo ($row->status=="approve")?'checked="checked"':'' ?> /></td>
		<td>
            <input type="text" name="orderlist[]" size="3" value="<?php echo $row->orderlist?>">
            <input type="hidden" name="orderid[]" value="<?php echo $row->id ?>">
        </td>
		<td><img src="uploads/book/<?php echo $row->image?>" width="60"></td>
		<td><?=$row->title?></td>
		<td><?php echo $row->url?></td>
		<td><?=$row->counter?></td>
		<td><?=$row->category->name?></td>
		<td>
			<a class="btn" href="books/admin/books/form/<?php echo $row->id?>" >แก้ไข</a>
			<a class="btn" href="books/admin/books/delete/<?php echo $row->id?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')">ลบ</a>
		</td>
		</tr>
	<?php endforeach; ?>
	</table>
<input type="submit" value="บันทึก">    
</form>
<?php echo $books->pagination()?>