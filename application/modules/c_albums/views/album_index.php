<style>
iframe{width:724px !important;}
</style>

<div id="slider_products" >	 		
				<ul id="highLight_products">
                    <li><img src="themes/colly/images/hilight_news_cn1.jpg" width="877" height="177" /></li>
                </ul>			
            </div>
      <div class="clr"></div>
       	
             <img src="themes/colly/images/china-title.png" width="57" height="20" class="title_news">
                <div class="linenews" style="width:890px;">&nbsp;</div>
       	 <div id="news_bg">
            <div id="contentchina">
                <br><br>
                <div style=" float:left; margin-left:30px; text-align:right; width:200px;"><strong>Official sole distributor page</strong><br> 
                中国官方独家经销商</div>
                <div class="btnVdo"><a href="#">&nbsp;</a></div>
                <div class="clr">&nbsp;</div>
                <br>
                <div style="width:660px; margin-left:50px;">
                    <img src="themes/colly/images/PHOTO.jpg" width="300" height="213" style="float:left;">
                    <img src="themes/colly/images/Cer.jpg" width="300" height="213" style="float:right;">
                </div>
                <div class="clr">&nbsp;</div>
                <br>
		  		<ul>
                  	<li>（1） person in charge：zhang fan<br>
    					<div class="pad">负责人 ： 张帆</div></li>
                    <li>（2） phone （china）：15810856124<br>
                        <div class="pad">联系电话（中国）：15810856124<br>
                          Phone（Thailand）：0875130138<br>
                          联系电话（泰国）：0875130138</div></li>
                    <li>（3）wechat ：470456996</li>
                    <li>（4）Line：zhangxiaotu523</li>
                    <li>（5）The only official website in china: <a href="www.collycollagenchina.com">www.collycollagenchina.com</a><br>
                        <div class="pad"> 唯一中国官方网站：<a href="www.collycollagenchina.com">www.collycollagenchina.com</a></div></li>
			  </ul>
			  
          <div id="gallery_album">
            <img src="themes/colly/images/title-vdo2.png" height="27" class="title_product">
            
            <br><br><br>
            
              <div class="vdo" style="margin-left: 40px;">
              	<?php if($video->url != ""):?>
                	<?php echo get_vdo($video->url)?>
                <?php else:?>
					<?php echo get_vdo($video->media)?>
				<?php endif;?>
              </div>
              
            <div class="clr"></div>
            <br><br>
                <ul>
                <?php foreach($albums as $row): ?>
                  <li>
                    <div class="image-block"><a href="uploads/c_albums/<?=$row->id?>/<?php echo $row->c_picture->image?>" rel='<?="lightbox[".$row->id."]"?>' title="<?php echo $row->title?>"><?php echo thumb('uploads/c_albums/'.$row->id.'/'.$row->c_picture->image,225,140,1,'')?></a></div>
                    <div class="album-text"><a href="c_albums/view/<?php echo $row->id?>"><?php echo lang_decode($row->name)?></a></div>
                    <div class="post-date"><?php echo lang_decode($row->name,'cn');?></div>
                  </li>
                  <div style="visibility:hidden; float: left; position: absolute; top: 0px;">
                  	<?php foreach($row->c_picture->order_by('id','asc')->get() as $key=>$picture): ?>
                  		<?php if($key != 0):?>
                  			<a href="uploads/c_albums/<?php echo $row->id?>/<?php echo $picture->image?>" rel='<?="lightbox[".$row->id."]"?>' title="<?php echo $picture->title?>"></a>
                  		<?php endif;?>
                  	<?php endforeach;?>
                  </div>
                <?php endforeach;?>
              </ul>
          </div>
          
          <div id="pagenumber_gallery">
            <?php echo $albums->pagination()?>
          </div>
	</div>
	<br clear="all">
</div><br>