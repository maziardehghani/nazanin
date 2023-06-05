<?phpclass model_adminsettings extends model{    private $table = 'tbl_option';    public function __construct()    {        parent::__construct();    }    public function get_settings()    {        $sql = "select * from $this->table ";        $result = model::doSelect($sql);        return $result;    }//    public function get_settings()//    {//        $sql = "select * from $this->table ";//        $result = model::doSelect($sql);//        foreach ($result as $key => $item)//        {//            $service_id = $item["service_id"];////            $sql = "select * from $this->table where id=?";//            $service = model::doSelect($sql , [$service_id] , false);//            $result[$key]["service"] = $service["title"];//        }//        return $result;////    }    public function add_settings(string $setting, string $value)    {        $sql = "insert into $this->table (setting , value  ) values(? , ?)";        model::doQuery($sql, [$setting, $value]);    }    public function update_settings(int $id, string $setting, string $value)    {            $sql = "update $this->table set value=? ,setting=? where id=?";            model::doQuery($sql, [$value, $setting, $id]);    }    public function get_setting($id)    {        $sql = "select * from $this->table where id=?";        $result = model::doSelect($sql, [$id], false);        return $result;    }    public function delete_settings($id)    {        $sql = "delete from $this->table where id=?";        model::doQuery($sql, [$id]);    }}