<h1>หมวดหมู่หนังสือ</h1>

<?php echo $categories->pagination()?>
<table class="list">
	<tr>
		<th>หัวข้อ</th>
		<th width="90">
			<a class="btn" href="books/admin/categories/form">เพิ่มรายการ</a>
		</th>
	</tr>
	<?php foreach($categories as $row): ?>
	<tr <?php echo cycle()?>>
		<td><?=$row->name?></td>
		<td>
			<a class="btn" href="books/admin/categories/form/<?php echo $row->id?>" >แก้ไข</a>
			<a class="btn" href="books/admin/categories/delete/<?php echo $row->id?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')">ลบ</a>
		</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php echo $categories->pagination()?>