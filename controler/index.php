<?php
class index extends controller
{
    function __construct()
    {

    }

    public function index()
    {
        $services = $this->model->get_services();
        $data=['services' => $services];
        $this->viewUrl('index/index' , $data);
    }


    public function logout()
    {
        session_start();
        session_destroy();
        header("location: ".URL.'/index');
    }
}