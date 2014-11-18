<style>
body #detail{float:none;width: 100%;}    
</style>

<div id="slider_products" >         
    <ul id="highLight_products">
        <li><img src="themes/colly/images/hilight_products_detail_1.jpg" width="950" height="177" /></li>
</div>

<div id="path">
    <img src="themes/colly/images/arrow_path1.png" width="7" height="15"><a href="home"><span class="pathlevel_1"><?php echo lang('home');?></span></a> <a href="products"><span class="pathlevel_2"> > <?php echo lang('product');?> ></span></a>  <span class="pathlevel_3"><?php echo lang_decode($product->title)?></span>
</div>
          
  <div class="clr"></div>
    <br>
    
  <div id="products_detail"><span class="title_products_detail"><?php echo lang_decode($product->title)?></span><br>
   <img src="themes/colly/images/line_detail.jpg" width="879" height="17" style="margin-left:30px;"><br>
   <div id="productshow">
            <div class="wraptocenter"><img src="uploads/product/<?php echo $product->id?>/<?php echo $product->product_picture->order_by('id','asc')->get()->image?>" width="277" height="203"></div>
            <div id="movers-row">
                <?php foreach($product->product_picture->order_by('id','asc')->get() as $row):?>
                    <div>
                        <a href="#" class="cross-link">
                            <img src="uploads/product/<?php echo $product->id?>/<?php echo $row->image?>" width="85" height="68" class="nav-thumb" border="0" />
                            <input type="hidden" value="<?php echo $row->id?>">
                        </a>
                    </div>
                <?php endforeach;?>
            </div>
      </div>
      
        <div id="detail">
            <?php echo lang_decode($product->detail)?>
        </div> 
        <div class="clr"></div><br>     
  </div>
  <div class="clr"></div><br><br>
<script type="text/javascript">
$(document).ready(function(){
    $('.cross-link').click(function(){
        // $('.loading').show();
        $(this).addClass('active-thumb').siblings().removeClass('active-thumb');
        $.post('products/getImg', {
            "id":$(this).find('input[type=hidden]').val()
        },function(data){
            $('.wraptocenter').html(data);
            // $('.loading').hide();
        });
        
        return false;
    });
});
</script>