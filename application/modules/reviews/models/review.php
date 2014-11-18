<?php
class Review extends ORM {

    var $table = 'reviews';
	
	var $has_one = array('user');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>