<style>
.contact-frm{width:99%;border: 1px solid #F97978;}
.contact-frm th{background: #F97978;color: #ffffff;padding: 5px;}
.error{color:red; font-style:italic; margin-left:5px;}
</style>

<div id="slider_products" >         
    <ul id="highLight_products">
        <li><img src="themes/colly/images/hilight_news_1.jpg" width="934" height="177" /></li>
</div>


<div id="path">
    <img src="themes/colly/images/arrow_path1.png" width="7" height="15"><a href="home"><span class="pathlevel_1"><?php echo lang('home')?></span></a> > <span class="pathlevel_3"><?php echo lang_decode($contact->title);?></span>
</div>

<div class="clr"></div><br>
   
<div id="products_detail">
  <span class="title_products_detail"><?php echo lang_decode($contact->title);?></span><br>
  <img src="themes/colly/images/line_detail.jpg" width="879" height="17" style="margin-left:30px;"><br>
  <?php echo lang_decode($contact->detail)?>
  
  <div style="margin:30px 0 0 0;">
        <form id="contact-frm" class="form-horizontal" method="post" action="contacts/save">
            <table class="contact-frm">
                <tr>
                    <th><?php echo lang('contact_title')?> :</th>
                    <td><input type="text" name="title" style="width:440px;"></td>
                </tr>
                <tr>
                    <th><?php echo lang('contact_detail')?> :</th>
                    <td><textarea id="inputDetail" name="detail" rows="5" cols="70" class="input-xlarge"></textarea></td>
                </tr>
                <tr>
                    <th><?php echo lang('contact_email')?> :</th>
                    <td><input type="text" class="input-xlarge" id="inputEmail" name="email" style="width:440px;"></td>
                </tr>
                <tr>
                    <th><?php echo lang('contact_captcha')?> :</th>
                    <td>
                        <img src="users/captcha" /><Br>
                        <input type="text" class="input-small" name="captcha" id="inputCaptcha" placeholder="กรอกรหัสลับ" style="width:100px;">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="ส่งช้อความ"></td>
                </tr>
            </table>
        </form>
        <br>
    </div>  
</div>
<br><br>
<script type="text/javascript">
$(document).ready(function(){
$("#contact-frm").validate({
    rules: 
    {
        title: 
        { 
            required: true
        },
        detail: 
        { 
            required: true
        },
        email: 
        {
            required: true
        },
        captcha:
        {
            required: true,
            remote: "users/check_captcha"
        }
    },
    messages:
    {
        title: 
        { 
            required: "กรุณากรอกหัวข้อ"
        },
        detail: 
        { 
            required: "กรุณากรอกรายละเอียด"
        },
        email: 
        {
            required: "กรุณากรอกอีเมล์"
        },
        captcha:
        {
            required: "กรุณากรอกตัวอักษรตัวที่เห็นในภาพ",
            remote: "กรุณากรอกตัวอักษรให้ตรงกับภาพ"
        }
    }
    });
});
</script>