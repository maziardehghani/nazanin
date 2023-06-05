<?php
class model_samplework extends model
{
    function __construct()
    {
        parent::__construct();
    }
    public function get_service_sampleworks($service_id)
    {
        $sql = 'select * from tbl_samplework where service_id = ?';
        $result = model::doSelect($sql , [$service_id]);
        return $result;
    }

    public function paginate($service_id)
    {
        $per_page_record = 6;
        if (isset($_GET["page"])) {
            $page  = $_GET["page"];
        }
        else {
            $page=1;
        }
        $start_from = ($page-1) * $per_page_record;
        $sql = "SELECT * FROM tbl_samplework where service_id = ? limit $start_from ,  $per_page_record ";
        $results = model::doSelect($sql , [$service_id]);

        return $results;
    }

    public function paginaterows($service_id)
    {
        $sql = "SELECT * FROM tbl_samplework where service_id = ?";
        $allRows = model::doSelect($sql , [$service_id]);
        $paginateRows = round(count($allRows ) / 6 )+1;
        return $paginateRows;
    }

    public function get_service($id)
    {
        $sql = 'select * from tbl_service where id=?';
        $result = model::doSelect($sql, [$id], false);
        return $result;
    }
}