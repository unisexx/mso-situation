<div id="topcontact">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="15"><img src="themes/colly/images/bg_top_left.png" width="16" height="41" /></td>
        <td background="themes/colly/images/bg_top.png"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="5%"><a href="www.facebook.com" target="_blank"><img src="themes/colly/images/icon-fb.png" title="www.facebook.com" width="26" height="26" border="0"></a></td>
            <td width="22%"><img src="<?php echo lang("head_tel");?>" /></td>
            <td width="21%"><a href="mailto:info@collycollagen"><img src="themes/colly/images/e-mail.png" title="info@collycollagen" width="181" height="18" border="0"/></a></td>
            <td width="45%"><a href="c_albums"><div class="menu-china">&nbsp;</div></a></td>
            <td width="3%"><div class="flag_th"><a <?php echo lang("flag_th")?> href="home/lang/th">&nbsp;</a></div></td>
            <td width="3%"><div class="flag_eng"><a <?php echo lang("flag_en")?> href="home/lang/en">&nbsp;</a></div></td>
            <td width="3%"><div class="flag_chiness"><a <?php echo lang("flag_cn")?> href="home/lang/cn">&nbsp;</a></div></td>
          </tr>
        </table></td>
        <td width="14"><img src="themes/colly/images/bg_top_right.png" width="16" height="41" /></td>
      </tr>
    </table>
  </div>
  <div id="logo"></div>
  <div id="topmenu">
    <ul>
        <li class="topmenu01"><a href="home">&nbsp;</a></li>
        <li class="<?php echo lang("topmenu02")?>"><a href="products">&nbsp;</a></li>
        <li class="<?php echo lang("topmenu03")?>"><a href="bnews">&nbsp;</a></li>
        <li class="<?php echo lang("topmenu04")?>"><a href="agents">&nbsp;</a></li>
        <li class="<?php echo lang("topmenu05")?>"><a href="albums">&nbsp;</a></li>
        <li id="have-sub" class="<?php echo lang("topmenu06")?>"><a href="reviews">&nbsp;</a>
            <ul class="fixture-list" style="display:none;">
                <div class="fixtures">
                  <li class="submenu01"><a href="reviews/index?category=Colly collagen"></a></li>
                  <li class="submenu02"><a href="reviews/index?category=Divoi concentrate serum"></a></li>   
                </div>
            </ul>
        </li>
        <li class="<?php echo lang("topmenu07")?>"><a href="contacts">&nbsp;</a></li>
    </ul>
  </div>

<script>
$(document).ready(function(){
    $('#topmenu li,.fixture-list').hover(
        function () {
            //show its submenu
            $('.fixture-list', this).stop().slideDown(100);

        }, 
        function () {
            //hide its submenu
            $('.fixture-list', this).stop().slideUp(10);
        }
    );
    
    $('#have-sub').hover(function(){
         $('ul.fixture-list').slideDown(50);        
    },
    function(){
         $('ul.fixture-list').slideUp(50);          
    });
});
</script>