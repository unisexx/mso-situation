<div class="menuabout1"><img src="themes/treba/images/title_aboutus.png" width="174" height="26">
    <ul>
        <?php foreach($abouts as $row):?>
        <li><a href="abouts/view/<?php echo $row->id?>"><?php echo lang_decode($row->title)?></a></li>
        <?php endforeach;?>
    </ul>
</div>