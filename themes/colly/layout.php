<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo base_url(); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $template['title']; ?></title>
<?php include_once('_css.php')?>
<?php include_once('_script.php')?>
<?php echo $template['metadata']; ?>
</head>
<body>
<div id="wrap_products">
    <div class="main">
        <?php include_once '_header.php';?>
     
        <?php echo $template['body'] ?>
        
        <div class="clr"></div>
            
      </div>
        <div id="footer"><img src="themes/colly/images/name_company2.png" width="586" height="70" style="padding-top:15px;"></div>

    </div>

</div>
</body>
</html>
