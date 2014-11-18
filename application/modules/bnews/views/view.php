<div id="slider_products" >         
    <ul id="highLight_products">
        <li><img src="themes/colly/images/hilight_news_1.jpg" width="934" height="177" /></li>
</div>

<div id="path">
    <img src="themes/colly/images/arrow_path1.png" width="7" height="15"><a href="home"><span class="pathlevel_1"><?php echo lang('home')?></span></a> <a href="bnews"><span class="pathlevel_2"> > <?php echo lang('news');?></a> ></span> <span class="pathlevel_3"><?php echo lang_decode($bnew->title);?></span>
</div>

  <div class="clr"></div><br>
   
  <div id="products_detail">
      <span class="title_products_detail"><?php echo lang_decode($bnew->title);?></span><br>
      <img src="themes/colly/images/line_detail.jpg" width="879" height="17" style="margin-left:30px;"><br>
      <div style="text-align: center;"><img src="uploads/bnew/<?php echo $bnew->image?>" style="max-width: 700px;"></div>
      <?php echo lang_decode($bnew->detail);?>
  </div>
  </div>