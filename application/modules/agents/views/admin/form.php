<script type="text/javascript">
$(function(){
    $("[rel=en],[rel=cn]").hide();
    $(".lang a").click(function(){
        $("[rel=" + $(this).attr("href") + "]").show().siblings().hide();
        $(this).addClass('active').siblings().removeClass('active');
        return false;
    })
})
</script>
<h1>ตัวแทนจำหน่าย</h1>
<form id="frmMain" action="agents/admin/agents/save/<?php echo $agent->id ?>" method="post" enctype="multipart/form-data" >
	
<table class="form">
    <tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a><a href="cn" class="flag cn">จีน</a></td></tr>
    <!-- <tr>
		<th></th>
		<td>
			<?php if($agent->image != ""):?>
			    <?php echo thumb("uploads/agent/".$agent->image,120,false,1);?>
			<?php else:?>
			    <?php echo thumb("themes/colly/images/productdetail_show_pic1_.jpg",120,false,1);?>
			<?php endif;?>
		</td>
	</tr>
	<tr><th>รูปภาพ :</th><td><input type="file" name="image" /></td></tr> -->
	<!-- 
	<tr>
        <th>รหัส :</th>
        <td>
            <input rel="th" type="text" name="code" value="<?php echo ($agent->code)?>" class="full" />
        </td>
    </tr>
	<tr>
		<th>ชื่อบริษัท :</th>
		<td>
			<input rel="th" type="text" name="company[th]" value="<?php echo lang_decode($agent->company,'th')?>" class="full" /> 
			<input rel="en" type="text" name="company[en]" value="<?php echo lang_decode($agent->company,'en')?>" class="full" />
		</td>
	</tr> -->
	<tr>
        <th>ฃื่อ :</th>
        <td>
            <input rel="th" type="text" name="name[th]" value="<?php echo lang_decode($agent->name,'th')?>" class="full" />
            <input rel="en" type="text" name="name[en]" value="<?php echo lang_decode($agent->name,'en')?>" class="full" />
            <input rel="cn" type="text" name="name[cn]" value="<?php echo lang_decode($agent->name,'cn')?>" class="full" />
        </td>
    </tr>
    <tr>
        <th>ที่อยู่ :</th>
        <td>
            <div rel="th"><textarea name="address[th]" class="full"><?php echo lang_decode($agent->address,'th')?></textarea></div>
            <div rel="en"><textarea name="address[en]" class="full"><?php echo lang_decode($agent->address,'en')?></textarea></div>
            <div rel="cn"><textarea name="address[cn]" class="full"><?php echo lang_decode($agent->address,'cn')?></textarea></div>
        </td>
    </tr>
    <tr>
        <th>โทรศัพท์ :</th>
        <td>
            <input rel="th" type="text" name="tel" value="<?php echo $agent->tel?>" class="full" />
        </td>
    </tr>
    <!-- <tr>
        <th>โทรสาร :</th>
        <td>
            <input rel="th" type="text" name="fax" value="<?php echo $agent->fax?>" class="full" />
        </td>
    </tr><tr>
        <th>มือถือ:</th>
        <td>
            <input rel="th" type="text" name="mobile" value="<?php echo $agent->mobile?>" class="full" />
        </td>
    </tr> -->
    <tr>
        <th>เว็บไซต์ :</th>
        <td>
            <input rel="th" type="text" name="website" value="<?php echo $agent->website?>" class="full" placeholder="ตัวอย่าง http://www.collycollagen.com" />
        </td>
    <!-- </tr><tr>
        <th>อีเมล์:</th>
        <td>
            <input rel="th" type="text" name="email" value="<?php echo $agent->email?>" class="full" />
        </td>
    </tr><tr>
        <th>ประวัติ:</th>
        <td>
            <input rel="th" type="text" name="record[th]" value="<?php echo lang_decode($agent->record,'th')?>" class="full" />
            <input rel="en" type="text" name="record[en]" value="<?php echo lang_decode($agent->record,'en')?>" class="full" />
        </td>
    </tr> -->
	<tr><th></th><td><input type="submit" value="บันทึก" /><?php echo form_back() ?></td></tr>
</table>
<?php echo form_referer() ?>
</form>