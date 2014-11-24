<style>
	#header_shelf{background: url("themes/situation/images/Bookshelf_01.jpg") no-repeat; width:1000px; height:65px; position:relative;}
	#body_shelf{background: url("themes/situation/images/Bookshelf_02.jpg") repeat-y; width:1000px;}
	#category{position:absolute; right:25px; top:20px;}
	.book{float: left; margin:19 0 10px 44px;}
	h1{text-align:center; padding-top:10px;}
</style>
<div>
	<div id="header_shelf">
		<h1>สถานการณ์ทางสังคม</h1>
		<span id="category">
			<select onchange="window.location='books?category='+this.value">
			<option value="">ทุกหมวด</option>
			<?foreach($categories as $row):?>
			<option value="<?=$row->id?>" <?=@$_GET['category'] == $row->id ? 'selected' : '' ;?>><?=$row->name?></option>
			<?endforeach;?>
			</select>
		</span>
	</div>
	<div id="body_shelf">
		<?foreach($books as $row):?>
      		<span class="book">
      			<a href="<?=$row->url?>" target="_blank"><img src="uploads/book/<?=$row->image?>" border="1" style="border-color:#CC6600" title="สถานการณ์ประชากรอาเซียน"/></a>
      		</span>
      	<?endforeach;?>
      	<br clear="all">
	</div>
	<div id="footer_shelf"></div>
</div>