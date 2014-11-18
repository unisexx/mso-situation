<div id="slider_products" >         
<ul id="highLight_products">
            <li><img src="<?php echo lang('banner_gallery')?>" width="877" height="177" /></li>
        </ul>           
    </div>
  <div class="clr"></div>
  <div id="gallery">
    <img src="themes/colly/images/title_gallery.png" width="144" height="27" class="title_product">
<div class="line">&nbsp;</div>
    
      <ul>
          <?php foreach($pictures as $row): ?>
              <li>
                  <a href="uploads/albums/<?php echo $album->id?>/<?php echo $row->image?>" rel='lightbox[gal]' title="<?php echo $row->title?>"><?php echo thumb('uploads/albums/'.$album->id.'/'.$row->image,320,false,1,'')?></a>
              </li>
          <?php endforeach;?>
      </ul>
  </div>
  
  <div id="pagenumber_gallery">
    <?php echo $pictures->pagination()?>
  </div>