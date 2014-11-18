<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
tiny('detail[th],detail[en],detail[cn]');
$(function(){
    $("[rel=en],[rel=cn]").hide();
    $(".lang a").click(function(){
        $("[rel=" + $(this).attr("href") + "]").show().siblings().hide();
        $(this).addClass('active').siblings().removeClass('active');
        return false;
    })
})
</script>

<h1>รีวิวลูกค้า</h1>
<form id="frmMain" action="reviews/admin/reviews/save/<?php echo $review->id ?>" method="post" enctype="multipart/form-data" >
	
<table class="form">
    <tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a><a href="cn" class="flag cn">จีน</a></td></tr>
	<tr>
		<th></th>
		<td>
			<?php if($review->image != ""):?><?php echo thumb("uploads/review/".$review->image,120,false,1);?><?php endif;?>
		</td>
	</tr>
	<tr><th>รูปภาพ :</th><td><input type="file" name="image" /></td></tr>
	<tr>
		<th>หัวข้อ :</th>
		<td>
			<input rel="th" type="text" name="title[th]" value="<?php echo lang_decode($review->title,'th')?>" class="full" />
			<input rel="en" type="text" name="title[en]" value="<?php echo lang_decode($review->title,'en')?>" class="full" />
			<input rel="cn" type="text" name="title[cn]" value="<?php echo lang_decode($review->title,'cn')?>" class="full" />
		</td>
	</tr>
	<tr>
	    <th>youtube url:</th>
	    <td>
	        <input type="text" name="url" value="<?php echo $review->url;?>" class="full">
	    </td>
	</tr>
	<tr>
        <th>เลือกไฟล์วิดีโอ :</th>
        <td><input class="full" type="text" name="media" value="<?php echo $review->media?>"/><input type="button" name="browse" value="เลือกไฟล์" onclick="browser($(this).prev(),'media')" /></td>
    </tr>
    <tr>
        <th>หมวดหมู่ :</th>
        <td><?=form_dropdown('category',array('Colly collagen'=>'Colly collagen','Divoi concentrate serum'=>'Divoi concentrate serum'),$review->category,'');?></td>
    </tr>
	<!-- <tr>
        <th>รายละเอียด :</th>
        <td>
            <div rel="th"><textarea name="detail[th]" class="full tinymce"><?php echo lang_decode($review->detail,'th')?></textarea></div>
            <div rel="en"><textarea name="detail[en]" class="full tinymce"><?php echo lang_decode($review->detail,'en')?></textarea></div>
            <div rel="cn"><textarea name="detail[cn]" class="full tinymce"><?php echo lang_decode($review->detail,'cn')?></textarea></div>
        </td>
    </tr> -->
	<tr><th></th><td><input type="submit" value="บันทึก" /><?php echo form_back() ?></td></tr>
</table>
<?php echo form_referer() ?>
</form>