<?php
/**
 * Created by PhpStorm.
 * User: oumarucho
 * Date: 02/04/2018
 * Time: 14:05
 */

class Pages extends Controller
{
    public function __construct()
    {
        echo 'pages loads ';
    }

    public function index()
    {
        $data = ['title' => 'Welcome'];

        $this->view('pages/index', $data);
    }

    public function about($id)
    {
        echo $id;
    }

}