<div id="slider_products" >         
    <ul id="highLight_products">
        <li><img src="themes/colly/images/hilight_products_1.jpg" width="982" height="177" /></li>
</div>
            
<div id="products">
    <img src="<?php echo lang("title_product");?>" height="28" class="title_product"><div class="line">&nbsp;</div>
    
      <ul>
          <?php foreach($products as $row):?>
            <li>
                <a href="products/view/<?php echo $row->id?>"><img src="uploads/product/<?php echo $row->id?>/<?php echo $row->product_picture->order_by('id','asc')->get()->image?>" width="190" height="171" /><br><?php echo lang_decode($row->title)?></a>
            </li>
          <?php endforeach;?>
      </ul>
      
    <div id="pagenumber">
        <?php echo $products->pagination()?>
    </div>
</div>