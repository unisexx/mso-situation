<?php
class C_album extends ORM {

    var $table = 'c_albums';
	
	var $has_one = array("user");
	
	var $has_many = array("c_picture");

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
	
}
?>