<?php
class C_review extends ORM {

    var $table = 'c_reviews';
	
	var $has_one = array('user');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>