<?php
class C_picture extends ORM {

    var $table = 'c_pictures';
	
	var $has_one = array('c_album');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>