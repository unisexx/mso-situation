<?php
class Book extends ORM {

    var $table = 'books';
	
	var $has_one = array('user','category');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>