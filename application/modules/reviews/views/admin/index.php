<h1>รีวิวลูกค้า</h1>

<table class="list">
	<tr>
		<th>หัวข้อ</th>
		<th width="90">
			<a class="btn" href="reviews/admin/reviews/form">เพิ่มรายการ</a>
		</th>
	</tr>
	<?php foreach($reviews as $row): ?>
	<tr <?php echo cycle()?>>
		<td><?php echo lang_decode($row->title);?></td>
		<td>
			<a class="btn" href="reviews/admin/reviews/form/<?php echo $row->id?>" >แก้ไข</a>
			<a class="btn" href="reviews/admin/reviews/delete/<?php echo $row->id?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')">ลบ</a>
		</td>
		</tr>
		<?php endforeach; ?>
	</table>
<?php echo $reviews->pagination()?>