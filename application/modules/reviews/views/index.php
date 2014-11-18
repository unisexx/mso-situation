<div id="slider_products" >         
<ul id="highLight_products">
        <li><img src="<?php echo lang('banner_review')?>" width="871" height="177" style="margin-left:50px;"></li>
    </ul>           
</div>
      <div class="clr"></div>
          <div id="review">
            <img src="<?php echo lang("title_review");?>" height="30"  class="title_review">
<div class="line_review">&nbsp;</div>
            
              <ul>
                  <?php foreach($reviews as $row):?>
                      <?php if($row->url != ""):?>
                          <li><div class="text_review"><?php echo lang_decode($row->title);?></div><a href="<?php echo $row->url?>" rel="lightbox[review]" title="<?php echo lang_decode($row->title)?>"><img src="http://img.youtube.com/vi/<?php echo getYouTubeIdFromURL($row->url)?>/hqdefault.jpg" class="imgvdo" width="261" height="167"></a></li>
                      <?php else:?>
                          <li><div class="text_review"><?php echo lang_decode($row->title);?></div><a href="reviews/ajax_vid/<?php echo $row->id?>?iframe=true&width=500&height=344" rel="lightbox[review]" title="<?php echo lang_decode($row->title)?>"><img src="uploads/review/<?php echo $row->image?>" class="imgvdo" width="261" height="167"></a></li>
                      <?php endif;?>
                  <?php endforeach;?>
              </ul>
          </div>
          
          <div id="pagenumber_gallery">
            <?php echo $reviews->pagination()?>
          </div>
        <div class="clr"></div>