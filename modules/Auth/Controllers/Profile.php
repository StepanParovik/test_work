<?php
namespace modules\Auth;
use CodeIgniter\Controller;


class Profile extends Controller{
    public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('name');
    }
}