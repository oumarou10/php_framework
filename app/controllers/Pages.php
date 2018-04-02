<?php
/**
 * Created by PhpStorm.
 * User: oumarucho
 * Date: 02/04/2018
 * Time: 14:05
 */

class Pages
{
    public function __construct()
    {
        echo 'pages loads ';
    }

    public function index()
    {
        echo 'index calls';
    }

    public function about($id)
    {
        echo $id;
    }

}