<h1>ตัวแทนจำหน่าย</h1>

<table class="list">
	<tr>
		<!-- <th width="70">แสดง</th> -->
		<th>ชื่อ</th>
		<th>ที่อยู่</th>
		<th>เว็บไซต์</th>
		<th width="90">
			<a class="btn" href="agents/admin/agents/form">เพิ่มรายการ</a>
		</th>
	</tr>
	<?php foreach($agents as $row): ?>
	<tr <?php echo cycle()?>>
		<!-- <td><input type="checkbox" name="status" value="<?php echo $row->id ?>" <?php echo ($row->status=="approve")?'checked="checked"':'' ?> /></td> -->
		<td><?php echo lang_decode($row->name)?></td>
		<td><?php echo lang_decode($row->address);?></td>
		<td><?php echo lang_decode($row->website)?></td>
		<td>
			<a class="btn" href="agents/admin/agents/form/<?php echo $row->id?>" >แก้ไข</a><a class="btn" href="agents/admin/agents/delete/<?php echo $row->id?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')">ลบ</a>
		</td>
    </tr>
    <?php endforeach; ?>
	</table>
<?php echo $agents->pagination()?>