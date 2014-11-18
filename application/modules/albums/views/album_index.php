<div id="slider_products" >         
<ul id="highLight_products">
                    <li><img src="<?php echo lang('banner_gallery')?>" width="877" height="177" /></li>
                </ul>           
            </div>
      <div class="clr"></div>
          <div id="gallery_album">
            <img src="<?php echo lang("title_gallery");?>" height="27" class="title_product">
            <div class="line_album">&nbsp;</div>
            <div class="clr"></div>
                <ul>
                <?php foreach($albums as $row): ?>
                  <li>
                    <div class="image-block"><a href="albums/view/<?php echo $row->id?>"><?php echo thumb('uploads/albums/'.$row->id.'/'.$row->picture->image,225,140,1,'')?></a></div>
                    <div class="album-text"><a href="albums/view/<?php echo $row->id?>"><?php echo lang_decode($row->name)?></a></div>
                    <div class="post-date">วันที่จัดงาน <?php echo mysql_to_th($row->actdate);?></div>
                  </li>
                <?php endforeach;?>
              </ul>
          </div>
          
          <div id="pagenumber_gallery">
            <?php echo $albums->pagination()?>
          </div>