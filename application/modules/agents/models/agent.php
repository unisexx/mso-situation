<?php
class Agent extends ORM {

    var $table = 'agents';
	
	var $has_one = array('user');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>