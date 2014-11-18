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
    
    $('input[name=image_add]').click(function(){
        $('.form tr:last').before('<tr><th>รูปภาพ </th><td><input type="file" name="image[]" /></td></tr>');
    })
    
    $('input[name=picture_delete]').click(function(){
        if(confirm('ยืนยันการลบ'))
        {
            var me = $(this);
            $.post('products/admin/products/delete_picture/' + $(this).attr('rel'),function(data){
                me.parent().parent().remove();
            })
        }
    })
})
</script>

<h1>ข่าวสารและกิจกรรม</h1>
<form id="frmMain" action="products/admin/products/save/<?php echo $product->id ?>" method="post" enctype="multipart/form-data" >
	
<table class="form">
    <tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a><a href="cn" class="flag cn">จีน</a></td></tr>
	<!-- <tr>
		<th></th>
		<td>
			<?php if($product->image != ""):?><?php echo thumb("uploads/product/".$product->image,120,false,1);?><?php endif;?>
		</td>
	</tr> -->
	<tr>
        <th>รหัสสินค้า :</th>
        <td>
            <input type="text" name="code" value="<?php echo $product->code?>" class="full" />
        </td>
    </tr>
	<tr>
		<th>หัวข้อ :</th>
		<td>
			<input rel="th" type="text" name="title[th]" value="<?php echo lang_decode($product->title,'th')?>" class="full" />
			<input rel="en" type="text" name="title[en]" value="<?php echo lang_decode($product->title,'en')?>" class="full" />
			<input rel="cn" type="text" name="title[cn]" value="<?php echo lang_decode($product->title,'cn')?>" class="full" />
		</td>
	</tr>
	<tr>
        <th>รายละเอียด :</th>
        <td>
            <div rel="th"><textarea name="detail[th]" class="full tinymce"><?php echo lang_decode($product->detail,'th')?></textarea></div>
            <div rel="en"><textarea name="detail[en]" class="full tinymce"><?php echo lang_decode($product->detail,'en')?></textarea></div>
            <div rel="cn"><textarea name="detail[cn]" class="full tinymce"><?php echo lang_decode($product->detail,'cn')?></textarea></div>
        </td>
    </tr>
    <tr>
        <th></th>
        <td><input type="button" name="image_add" value="เพิ่มรูปภาพ" /></td>
    </tr>
    <?php foreach($product->product_picture as $picture): ?>
    <tr>
        <th>รูปภาพ </th>
        <td>
            <a href="uploads/product/<?php echo $product->id ?>/<?php echo $picture->image ?>" rel="lightbox">
            <img style="width:50px; vertical-align:middle;" src="uploads/product/<?php echo $product->id ?>/thumbnail/<?php echo $picture->image ?>" />
            </a>
            <!-- <input type="text" name="title[]" placeholder="ชื่อรูป"> -->
            <input type="file" name="image[]" />
            <input type="hidden" name="picture_id[]" value="<?php echo $picture->id ?>" />
            <input type="button" name="picture_delete" value="ลบ" rel="<?php echo $picture->id ?>" />
        </td>
    </tr>
    <?php endforeach; ?>
    <tr><th>รูปภาพ :</th><td><input type="file" name="image[]" /> ขนาด 275 x 180px</td></tr>
	<tr><th></th><td><input type="submit" value="บันทึก" /><?php echo form_back() ?></td></tr>
</table>
<?php echo form_referer() ?>
</form>