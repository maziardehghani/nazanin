<?php
class model_index extends model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_services()
    {
        $sql = 'select * from tbl_service';
        $result = model::doSelect($sql);
        return $result;
    }


}