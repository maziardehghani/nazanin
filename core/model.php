<?php
class model
{
    public static $conn = '';
    function __construct()
    {
        $username = 'root';
        $password = '';
        $dbname = 'nazanin';
        $hostName = 'localhost';
        try {
            $attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
            self::$conn= new PDO('mysql:host='.$hostName.';dbname='.$dbname,$username,$password,$attr);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch (Exception $exception)
        {
            echo $exception->getMessage();
        }
        include_once('public/home/plugins/jdf.php');

}



    public static function get_option()
    {
        $sql = 'select * from tbl_option';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $option =[];
        foreach ($result as $row)
        {
            $setting = $row['setting'];
            $value = $row['value'];
            $option[$setting] = $value;
        }
        return $option;
    }






    public static function doSelect($sql,$values=[],$fetchAll=true , $fetchStyle=PDO::FETCH_ASSOC)
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($values as $key=>$value)
        {
            $stmt->bindValue($key+1 , $value);
        }
        $stmt->execute();
        if ($fetchAll)
        {
            $result = $stmt->fetchAll($fetchStyle);
        }
        else
        {
            $result = $stmt->fetch($fetchStyle);
        }
        return $result;
    }

    public static function doQuery($sql,$values=[]):void
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($values as $key=>$value)
        {
            $stmt->bindValue($key+1 , $value);
        }
        $stmt->execute();
    }
    public static function session_init()
    {
        @session_start();
    }
    public static function set_session($name , $value)
    {
        $_SESSION[$name] = $value;
    }
    public static function get_session($name)
    {
        if (isset($_SESSION[$name]))
        {
            return $_SESSION[$name];
        }else
        {
            return false;
        }
    }

    /**
     * @throws Exception
     */
    public static function checkadmin()
    {
            self::session_init();
            $email = self::get_session('admin');
            $sql = 'select * from tbl_admin where email = ? ';
            $userInfo = self::doSelect($sql , [$email] , false);
            return $userInfo;

    }
    public static function loginCheck()
    {
        self::session_init();
        $email = self::get_session('userID');
        return $email;

    }
    public static function access_check()
    {
        if (!self::loginCheck())
        {
            header('location: '.URL.'/index');
        }
        $userLevel = self::UserLevel();
        if ($userLevel != 'admin')
        {
            header('location: '.URL.'/index');
        }
    }

//    public static function Categories()
//    {
//        $sql = 'select * from tbl_category where parent != 0';
//        $categories = self::doSelect($sql);
//
//        return $categories;
//    }


}