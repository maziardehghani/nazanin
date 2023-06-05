<?php
class controller
{
    public $model = '';
    function __construct()
    {

    }
    function viewUrl($Url , $data=[], $include_header = true,$include_footer = true)
    {
        if($include_header)
        {
            require ('header.php');
        }

        if (file_exists('view/home/'.$Url.'.php'))
        {
            require ('view/home/'.$Url.'.php');
        }


        if($include_footer)
        {
            require ('footer.php');
        }

    }

    function model($model_name)
    {
        require ('model/model_'.$model_name.'.php');
        $className = 'model_'.$model_name;
        $this->model = new $className;
    }
}