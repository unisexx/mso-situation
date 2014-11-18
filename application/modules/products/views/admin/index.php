<h1>ผลิตภัณฑ์</h1>
<?php echo $products->pagination()?>
<table class="list">
	<tr>
	    <!-- <th>รูป</th> -->
		<th>หัวข้อ</th>
		<th width="90">
			<a class="btn" href="products/admin/products/form">เพิ่มรายการ</a>
		</th>
	</tr>
	<?php foreach($products as $row): ?>
	<tr <?php echo cycle()?>>
	    <!-- <td><?php echo thumb("uploads/product/".$row->image,120,false,1);?></td> -->
		<td><?php echo lang_decode($row->title);?></td>
		<td>
			<a class="btn" href="products/admin/products/form/<?php echo $row->id?>" >แก้ไข</a>
			<a class="btn" href="products/admin/products/delete/<?php echo $row->id?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')">ลบ</a>
		</td>
		</tr>
		<?php endforeach; ?>
	</table>
<?php echo $products->pagination()?>