<?php

class sports
{
    // table fields
    public $id;
    public $pname;
    public $category;
    public $name;
    // message string
    public $id_msg;
    public $pname_msg;
    public $category_msg;
    public $name_msg;
    // constructor set default value
    function __construct()
    {
        $id=0;$pname=$category=$name="";
        $id_msg=$pname_msg=$category_msg=$name_msg="";
    }
}

?>