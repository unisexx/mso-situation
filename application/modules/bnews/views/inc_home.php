<div id="newsupdate">
    <img src="<?php echo lang("title_new");?>" height="23" class="title_product">
    <div class="line">&nbsp;</div>
  <div class="btn_more">&nbsp;</div>
</div>
<div class="clr"></div>
<div id="news">
  <ul>
      <?php foreach($bnews as $row):?>
        <li>
            <a href="bnews/view/<?php echo $row->id?>">
                <img src="uploads/bnew/<?php echo $row->image?>" width="188" height="100" border="0" class="img_news">
            </a>
            <div class="boxtextnews">
                <span class="dateNews"><?php echo mysql_to_th($row->created);?></span><br>
                <span class="h_textNews"><?php echo lang_decode($row->title);?></span><br>
                <a href="#" class="textNews" ><?php echo strip_tags(lang_decode($row->detail))?></a>
            </div>
        </li>
      <?php endforeach;?>
  </ul>
</div>