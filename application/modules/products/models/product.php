<?php
class Product extends ORM {

    var $table = 'products';
	
	var $has_one = array('user');
    
    var $has_many = array("product_picture");

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>