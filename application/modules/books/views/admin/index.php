<h1>ลิ้งค์รูปภาพ</h1>

<?php echo $books->pagination()?>
<table class="list">
	<tr>
		<th width="70">แสดง</th>
		<th>รูปภาพปก</th>
		<th>หัวข้อ</th>
		<th>url</th>
		<th>หมวดหมู่</th>
		<th width="90">
			<a class="btn" href="books/admin/books/form">เพิ่มรายการ</a>
		</th>
	</tr>
	<?php foreach($books as $row): ?>
	<tr <?php echo cycle()?>>
		<td><input type="checkbox" name="status" value="<?php echo $row->id ?>" <?php echo ($row->status=="approve")?'checked="checked"':'' ?> /></td>
		<td><img src="uploads/book/<?php echo $row->image?>" width="60"></td>
		<td><?=$row->title?></td>
		<td><?php echo $row->url?></td>
		<td><?=$row->category->name?></td>
		<td>
			<a class="btn" href="books/admin/books/form/<?php echo $row->id?>" >แก้ไข</a>
			<a class="btn" href="books/admin/books/delete/<?php echo $row->id?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')">ลบ</a>
		</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php echo $books->pagination()?>