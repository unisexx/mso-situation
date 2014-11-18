<div id="slider_products" >         
<ul id="highLight_products">
                    <li><img src="<?php echo lang('banner_agent')?>" width="988" height="177" /></li>
                </ul>           
            </div>
      <div class="clr"></div>
          <div id="agent">
            <img src="<?php echo lang("title_agent");?>"  height="31" class="title_review">
<div class="line_agent">&nbsp;</div>
            
              <ul>
                <?php foreach($agents as $row):?>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="3">
                        <tr>
                            <td width="22%" align="right">ชื่อ : </td>
                            <td width="78%"><span class="name"><?php echo lang_decode($row->name);?></span></td>
                          </tr>
                          <tr>
                            <td align="right">ที่อยู่ : </td>
                            <td><?php echo lang_decode($row->address);?></td>
                          </tr>
                          <tr>
                            <td align="right">เบอร์โทรศัพท์ : </td>
                            <td><?php echo lang_decode($row->tel);?></td>
                          </tr>
                          <tr>
                            <td align="right"> เว็บไซต์ :</td>
                            <td><?php echo lang_decode($row->website);?></td>
                          </tr>
                        </table>
                    </li>
                <?php endforeach;?>
              </ul>
          </div>
          
          <div id="pagenumber_gallery">
            <?php echo $agents->pagination()?>
          </div>